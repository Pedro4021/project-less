<?php

use Illuminate\Support\Facades\Route;
use App\Models\informacion;

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

Route::get('/index', function () {
 $informacion= new informacion();
 $informacion->nombre= 'Lesly Pholett';
 $informacion->apellido_paterno='Ibarra';
 $informacion->apellido_materno='Pantoja';
 $informacion->edad='20';
 $informacion ->correo='lesly_1320114006@uptecamac.edu.mx';


 
 
    return view ('blog.index',['informacion'=>$informacion]);
  //echo ("hola mundo");

}) ->name('index');

Route::get('/hobis', function () {
    return view ('blog.hobis');
    //echo ("hola mundo");
  
  }) ->name('Hobis');

  Route::get('/informacionescolar', function () {
    $informacion= new informacion();
    $informacion->nombre= 'Lesly Pholett';
    $informacion->apellido_paterno='Ibarra';
    $informacion->apellido_materno='Pantoja';
    $informacion ->correo='lesly_1320114006@uptecamac.edu.mx';
    $informacion ->matricula='1320114006';
    $informacion ->grupo = '3522';
    $informacion ->Cuatrimestre= 'Quinto cuatrimestre';
    $informacion ->carrera= 'Ingenieria en software';
    $informacion ->turno= 'vespertino';


    return view ('blog.informacionescolar',['informacion'=>$informacion]);
    //echo ("hola mundo");
  
  }) ->name('informacionescolar');


