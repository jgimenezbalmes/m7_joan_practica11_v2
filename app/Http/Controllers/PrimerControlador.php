<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerControlador extends Controller
{
    public function arrel(){
        return view('principal');
    }

    public function hola($persona = ''){
        $textoFinal = 'Hola, ';
        $textoFinal .= ($persona == '')?'mundo':$persona;
        return view('holaMissatge') -> with (['texto' => $textoFinal]);
    }

    public function pruebaParametros($param1, $param2, $param3) {
        $textoFinal = 'El primer parametro es igual a ' .$param1 .'. ';
        $textoFinal .= 'El segundo parametro es igual a ' .$param2 .'. ';
        $textoFinal .= 'El tercer parametro es igual a ' .$param3 .'. ';

        return view('holaMissatge') -> with (['texto' => $textoFinal]);
    }
}
