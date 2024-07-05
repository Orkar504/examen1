<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Directorio;

class directorioController extends Controller
{
    //manejo de datos
    public function addEntrada(Request $request)
    {
        $entrada = new Directorio();
        $entrada->codigoEntrada = $request->codigo;
        $entrada->nombre = $request->nombre;
        $entrada->apellido = $request->apellido;
        $entrada->correo = $request->correo;
        $entrada->telefono = $request->telefono;

        $entrada->save();

        return redirect('directorio');
      

    }

    public function buscarEntrada(Request $request)
    {
        $correo = $request->correo;
        

        $directorios = Directorio::where('correo',$correo)->get();
       

        return view('vercontactos',compact('directorios'));

        
    }




    //ver vistas
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
        echo "destruir";
    }

}
