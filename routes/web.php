<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactoController;
use App\Http\Controllers\directorioController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/directorio',[directorioController::class,'verDirectorio'])
->name('dir');



//Botones de dir
Route::get('/directorio/entrada', [directorioController::class,'verEntrada'])
->name('dir.ver.entrada');

Route::get('/directorio/eliminar', [directorioController::class,'verEliminar'])
->name('dir.ver.eliminar');


Route::get('/directorio/eliminar/si', [directorioController::class,'destruir'])
->name('dir.ver.eliminar.si');

Route::get('/directorio/contactos', [directorioController::class,'vercontactos'])
->name('dir.ver.contactos');

Route::get('/directorio/buscar', [directorioController::class,'verBuscar'])
->name('dir.ver.buscar');

//botones de Nueva entrada directorio
Route::post('/directorio/entrada/nueva', [directorioController::class,'addEntrada'])
->name('dir.entrada.nueva');


//Botones de buscar
Route::post('/directorio/buscar/correo', [directorioController::class,'buscarEntrada'])
->name('dir.buscar.correo');

//Botones contacto
Route::post('/directorio/contacto/nueva', [contactoController::class,'crearContacto'])
->name('contacto.entrada.nueva');

//Botones agregar nuevo contacto


