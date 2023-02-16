<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorEjercicio1 extends Controller
{
    public function ej1parametro () {

        return 'Primera part del exercici';
    }

    public function ej1_2 ($nomAlumne){
        $textoFinal = 'Éste es el resultado del primer ejercicio de la práctica hecha por ' .$nomAlumne.'. ';

        return view('holaMissatge') -> with (['texto' => $textoFinal]);
    }

    public function primeraView ($nomAlumne){
        $textoFinal = 'Éste es el resultado del primer ejercicio de la práctica hecha por ' .$nomAlumne.'. ';

        return view('1raview') -> with (['texto' => $textoFinal]);
    }
}
