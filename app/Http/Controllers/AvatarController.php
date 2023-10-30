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
        $avatar = DB::table('avatares')->select('NombreArchivo', 'TipoArchivo', 'DatosImagen')
            ->where('ID', $id)
            ->first();

        if (!$avatar) {
            abort(404); // O maneja el error de alguna otra forma
        }

        $nombre_archivo = $avatar->NombreArchivo;
        $tipo_archivo = $avatar->TipoArchivo;
        $datos_imagen = $avatar->DatosImagen;

        return view('avatar.show', compact('nombre_archivo', 'tipo_archivo', 'datos_imagen'));
    }
}
