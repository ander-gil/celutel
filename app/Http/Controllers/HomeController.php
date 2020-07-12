<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function getregistro_cliente()
    {
        return view('registro_cliente');
    }

    public function postregistro_cliente(Request $request)
    {
        
        $reglas=([
            'nombre' => 'required',
            'direccion' => 'required',
            'correo' =>'required|string|email|max:255',
            'telefono'=> 'required|min:7',
            'identificacion'=>'required',
            'ciudad'=>'required'
        ]);

        $mensajes=[
            'nombre.required'=>'el campo de nombre es obligatorio',
            'direccion.required'=>'el campo de direccion es obligatorio es obligatorio',
            'correo.required'=>'el campo de correo es obligatorio',
            'correo.email'=>'ingresar formato de correo valido',
            'telefono.min'=>'campo telefono, le faltan caracteres',
            'telefono.required'=>'campo telefono, es obligatorio',
            'identificacion.required'=>'el campo de identificacion es obligatorio',
            'ciudad.required'=>'el campo de ciudad es obligatorio',
        ];
         
        $this->validate($request, $reglas, $mensajes);
        
        $cliente = new Cliente();

        $cliente-> nombre = $request->input('nombre');
        $cliente-> apellido = $request->input('apellido');
        $cliente-> direccion = $request->input('direccion');
        $cliente-> correo = $request->input('correo');
        $cliente-> telefono = $request->input('telefono');
        $cliente-> identificacion = $request->input('identificacion');
        $cliente-> ciudad = $request->input('ciudad');
        $cliente-> telefono_fijo = $request->input('telefono_fijo');
        $cliente->save();
        return back()->with('notificacion', 'Cliente Registrado Exitosamente');  
    }

  
}
