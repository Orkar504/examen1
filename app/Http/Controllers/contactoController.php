<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Contacto;

class contactoController extends Controller
{
    public function crearContacto(Request $request)
    {
        return view('agregarcontacto');

    }

    public function getContacto()
    {

    }

    public function editContacto()
    {

    }

    public function destroyContacto($id)
    {
        $contacto =  Contacto::find($id);

        $contacto->delete();

        return redirect ('/directorio');
    }

    

}
