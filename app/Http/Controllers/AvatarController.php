<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;


class AvatarController extends Controller
{
    public function show($id)
    {
        $avatar = DB::table('avatares')->select('id', 'NombreArchivo', 'TipoArchivo', 'DatosImagen')
            ->where('id', $id)
            ->first();

        if (!$avatar) {
            abort(404); // O maneja el error de alguna otra forma
        }

        $id_archivo = $avatar->id;
        $nombre_archivo = $avatar->NombreArchivo;
        $tipo_archivo = $avatar->TipoArchivo;
        $datos_imagen = $avatar->DatosImagen;

        // return view('avatar.show', compact('id_archivo','nombre_archivo', 'tipo_archivo', 'datos_imagen'));
        return view('avatar.show', compact('id_archivo','nombre_archivo', 'tipo_archivo', 'datos_imagen'));
    }

    
    public function show222()
    {
        $user = Auth::user(); // Obtén el usuario autenticado
        $avatarID = $user->AvatarID; // Supongo que el campo en la tabla de usuarios se llama 'AvatarID'
    
        $avatar = DB::table('avatares')
            ->select('id', 'NombreArchivo', 'TipoArchivo', 'DatosImagen')
            ->where('id', $avatarID) // Ajusta el campo si es diferente
            ->first();
    
        if (!$avatar) {
            abort(404); // O maneja el error de alguna otra forma
        }
    
        $id_archivo = $avatar->id;
        $nombre_archivo = $avatar->NombreArchivo;
        $tipo_archivo = $avatar->TipoArchivo;
        $datos_imagen = $avatar->DatosImagen;
    
        // Crear el contenido HTML con la imagen en un div
        $imagenHtml = '<div>';
        $imagenHtml .= '<img src="data:' . $tipo_archivo . ';base64,' . base64_encode($datos_imagen) . '" alt="Avatar">';
        $imagenHtml .= '</div>';
    
        return $imagenHtml;
    }
    



    // Obtener todas las imágenes
    public function obtenerImagenes() {
        Log::info('La función obtenerImagenes se está ejecutando'); // Mensaje de registro

        $imagenes = DB::table('avatares')->select('DatosImagen', 'id')->get();
        Log::info('Datos obtenidos de la base de datos:', $imagenes); // Registro de los datos obtenidos

        dd($imagenes); // Utiliza dd para mostrar y detener la ejecución
        return response()->json($imagenes);
    }

    // Obtener los avatares para mostrarlos en una vista
    public function obtenerAvatares() {
        $avatares = DB::table('avatares')->select('DatosImagen', 'id')->get();
    
        $imagePaths = [];
    
        foreach ($avatares as $avatar) {
            $datosImagen = $avatar->DatosImagen;
            $id = $avatar->id;
            $imagePaths[] = [$datosImagen, $id];
        }
    
        return view('select-avatar')->with('imagePaths', $imagePaths);
    }
    

    // Mostrar el avatar del usuario autenticado
    public function showAuthenticatedUserAvatar()
    {
        $user = Auth::user(); //usuario autenticado
        $avatarID = $user->AvatarID; //campo 'AvatarID' en la tabla de usuarios

        $avatar = DB::table('avatares')
        ->select('id', 'NombreArchivo', 'TipoArchivo', 'DatosImagen')
        ->where('id', $avatarID) // Ajusta el campo si es diferente
        ->first();
    
        if (!$avatar) {
            abort(404); // O maneja el error de alguna otra forma
        }
        
        $id_archivo = $avatar->id;
        $nombre_archivo = $avatar->NombreArchivo;
        $tipo_archivo = $avatar->TipoArchivo;
        $datos_imagen = $avatar->DatosImagen;
    
        // return Response::make($datos_imagen, 200, [
        //     'Content-Type' => $tipo_archivo,
        //     'Content-Disposition' => 'inline; filename=avatar.' . pathinfo($tipo_archivo, PATHINFO_EXTENSION),
        // ]);

        // return view('dashboard', [
        //     'tipo_archivo' => $tipo_archivo,
        //     'datos_imagen' => $datos_imagen,
        // ]);

        return view('avatar', compact('id_archivo','nombre_archivo', 'tipo_archivo', 'datos_imagen'));
    }


}
