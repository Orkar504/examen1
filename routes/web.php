<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactoController;
use App\Http\Controllers\directorioController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/directorio',[directorioController::class,'verDirectorio'])
->name('dir');



//Botones
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

