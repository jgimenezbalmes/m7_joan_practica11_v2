<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrimerControlador;
use App\Http\Controllers\ControladorEjercicio1;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PrimerControlador::class, 'arrel']);

Route::get('/hola', [PrimerControlador::class, 'hola']);

Route::get('hola/{persona?}',[PrimerControlador::class, 'hola']);

Route::get('parametros/{param1}/{param2}/{param3}', [PrimerControlador::class, 'pruebaParametros']);

//Ex 1.1
Route::get('/ej1', [ControladorEjercicio1::class, 'ej1parametro']);
//Ex 1.2
Route::get('ej1_2/{ej1_2}', [ControladorEjercicio1::class, 'ej1_2']);
//PrimeraView
Route::get('ej1_4/{nomAlumne}', [ControladorEjercicio1::class, 'primeraView']);
//ej2
Route::get('ej2/{param1}/{param2}/{param3}/{param4}', [ControladorEjercicio1::class, 'primeraView']);

