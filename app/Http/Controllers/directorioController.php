<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class directorioController extends Controller
{
    public function verDirectorio()
    {
        return view ('directorio');
    }

    public function verEntrada()
    {
        return view ('crearEntrada');
    }

    public function verBuscar()
    {
        return view ('buscar');
    }

    public function verContactos()
    {
        return view ('vercontactos');
    }

    public function verEliminar()
    {
        return view ('eliminar');
    }

    public function destruir()
    {
        //destruir el registro
    }



}
