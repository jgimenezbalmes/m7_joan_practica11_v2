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

    public function ultimapart ($param1, $param2, $param3, $param4){
        $textoFinal = 'Éste es el resultado del segundo ejercicio de la práctica hecha por ' .$param1 .' ';
        $textoFinal .= '' .$param2 .'';
        $textoFinal .= ' ' .$param3 .'';
        $textoFinal .= ', con edad ' .$param4 .' años. ';

        return view('1raview') -> with (['texto' => $textoFinal]);
    }
}
