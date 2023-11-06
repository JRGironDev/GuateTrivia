<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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
    
}
