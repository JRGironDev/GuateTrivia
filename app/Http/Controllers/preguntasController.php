<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class preguntasController extends Controller
{
    public function index()
    {

        $url = 'http://3.135.193.178/preguntas.php';
        $json = file_get_contents($url);
        $data = json_decode($json);
        //return $data->pregunta;
        return view('preguntas.index', compact('data'));
    }
    public function resultado(request $request)
    {
        $nota = 0;
        if($request->opcion = $request->correcta)
        {
            $nota = $nota + 10;
        }else{
            $nota = $nota + 0;
        }
        return view('preguntas.resultados', compact('nota'));
    }

}
