<?php

namespace App\Http\Controllers;

use App\Models\Amistad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AmistadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('amistad.mis-amigos');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Amistad $amistad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Amistad $amistad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Amistad $amistad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */

    public function aceptar($ID)
    {
        $amistad = Amistad::find($ID);
         
        if ($amistad) {
            // Elimina el registro de la tabla 'amistades'
            DB::table('amistades')->where('id', $ID)->update(['EstadoSolicitud' => 2]);
        }
     
        // Redirige al usuario de regreso a la vista de "Solicitudes Recibidas" u otra vista deseada
        return redirect()->route('solicitud-recibida');
     }
     
    // Función para eliminar registro de la tabla amistades
    public function destroy($ID, Request $request)
    {        
        $amistad = Amistad::find($ID);
        if ($amistad) {
            // Elimina el registro de la tabla 'amistades'
            DB::table('amistades')->where('id', $ID)->delete();
        }

         // Verifica el valor del parámetro "origin" en la solicitud
         $origin = $request->input('origin');
    
        // Redirige al usuario de regreso a la vista correcta según el valor de "origin"
        if ($origin === 'enviadas') {
            return redirect()->route('solicitud-enviada');
        } elseif ($origin === 'recibidas') {
            return redirect()->route('solicitud-recibida');
        } elseif ($origin === 'amigos') {
            return redirect()->route('mis-amigos');
        } else {
            // En caso de un valor desconocido, redirige a una vista por defecto o realiza otra acción adecuada
            return redirect()->route('vista-por-defecto');
        }
    }


    // Vista de mis amigos
    public function misamigos()
    {
        $userID = Auth::id(); // Obtiene el ID del usuario autenticado

        $amistades = DB::table('amistades')
        ->select(
            'amistades.*',
            'u1.name as persona1_name',
            'u1.id as persona1_id',
            'u2.name as persona2_name',
            'u2.id as persona2_id'
        )
        ->join('users as u1', 'amistades.Persona1', '=', 'u1.id')
        ->join('users as u2', 'amistades.Persona2', '=', 'u2.id')
        ->where('amistades.EstadoSolicitud', 2) // Filtra por EstadoSolicitud igual a 2
        ->where(function ($query) use ($userID) {
            $query->where('amistades.Persona1', '=', $userID)
                  ->orWhere('amistades.Persona2', '=', $userID);
        })
        ->get();
        
        $amigos = [];
        foreach ($amistades as $amistad) {
           if ($amistad->persona1_id != $userID) {
                $amigos[] = [
                    'amistad_id' => $amistad->ID,
                    'id' => $amistad->persona1_id,
                    'nombre' => $amistad->persona1_name,
                ];
            }
            if ($amistad->persona2_id != $userID) {
                $amigos[] = [
                   'amistad_id' => $amistad->ID,
                   'id' => $amistad->persona2_id,
                    'nombre' => $amistad->persona2_name,
                ];
            }
        }

        return view('amistad.mis-amigos', compact('amigos'));
    }


    // Vista de buscar amigos
    public function buscaramigos()
    {
        // ID del usuario autenticado
        $userID = Auth::id();

        // lista de IDs de usuarios que están en las columnas "persona1" y "persona2" de la tabla "amistades"
        $existingUserIDs = DB::table('amistades')
            ->select('Persona1')
            ->union(DB::table('amistades')->select('Persona2'))
            ->distinct()
            ->pluck('Persona1')
            ->toArray();
    
        // lista de usuarios que no están en las columnas "persona1" y "persona2" de la tabla "amistades
        $usuariosNoAmigos = DB::table('users')
            ->where('id', '!=', $userID) // Excluye al usuario autenticado    
            ->whereNotIn('id', $existingUserIDs)
            ->get();
    
        // dd($userID); // Agrega esta línea para depurar
        // dd($userID); // Agrega esta línea para depurar
        // dd($existingUserIDs); // Agrega esta línea para depurar
        // dd($usuariosNoAmigos); // Agrega esta línea para depurar

        return view('amistad.buscar-amigos', compact('usuariosNoAmigos'));
    }
    
    // Función para enviar solicitud de amistad
    public function enviarSolicitudAmistad(Request $request)
    {
        $Persona1 = $request->input('persona1');
        $Persona2 = $request->input('persona2');
        $EstadoSolicitud = $request->input('estado_solicitud');

        DB::table('amistades')->insert([
            'Persona1' => $Persona1,
            'Persona2' => $Persona2,
            'EstadoSolicitud' => $EstadoSolicitud,
        ]);

        // $amistad = new Amistad();
        // $amistad->Persona1 = $Persona1;
        // $amistad->Persona2 = $Persona2;
        // $amistad->EstadoSolicitud = $EstadoSolicitud;
        // $amistad->save();
    
        return redirect()->route('buscar-amigos');//->with('success', 'Solicitud de amistad enviada con éxito.');
    }
    
    // funcion para Buscar amigos
    public function buscarAmigo(Request $request)
    {
        $busqueda = $request->input('busqueda');
        $amigos = DB::table('amistades')
            ->join('users as u1', 'amistades.Persona1', '=', 'u1.id')
            ->join('users as u2', 'amistades.Persona2', '=', 'u2.id')
            ->where(function ($query) use ($busqueda) {
                $query->where('amistades.EstadoSolicitud', '2')
                      ->where(function ($query) use ($busqueda) {
                          $query->where('u1.name', 'like', "%$busqueda%")
                                ->orWhere('u2.name', 'like', "%$busqueda%");
                      });
            })
            ->select('u1.name as persona1_name', 'u2.name as persona2_name')
            ->get();
    
        return view('amistad.buscar-amigos', compact('amigos')); // revisar esto
    }
    
    // Vista de solicitudes enviadas
    public function solicitudenviada()
    {
        $userID = Auth::id();
        $amistades = DB::table('amistades')
            ->select('amistades.*', 'u1.name as persona1_name', 'u2.name as persona2_name')
            ->join('users as u1', 'amistades.Persona1', '=', 'u1.id')
            ->join('users as u2', 'amistades.Persona2', '=', 'u2.id')
            ->where('amistades.Persona1', $userID)
            ->where('amistades.EstadoSolicitud', '1')
            ->get();

        return view('amistad.solicitud-enviada', compact('amistades'));
    }

    // Vista de solicitudes recibidas
    public function solicitudrecibida()
    {
        $userID = Auth::id();
        $amistades = DB::table('amistades')
            ->select('amistades.*', 'u1.name as persona1_name', 'u2.name as persona2_name')
            ->join('users as u1', 'amistades.Persona1', '=', 'u1.id')
            ->join('users as u2', 'amistades.Persona2', '=', 'u2.id')
            ->where('amistades.Persona2', $userID)
            ->where('amistades.EstadoSolicitud', '1')
            ->get();

        return view('amistad.solicitud-recibida', compact('amistades'));
    }
}
