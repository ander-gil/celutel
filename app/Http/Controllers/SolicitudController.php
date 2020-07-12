<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Entrada;
use App\Equipo;
use App\Modelo;
use App\Parte;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Foreach_;
use SebastianBergmann\Environment\Console;

class SolicitudController extends Controller
{
    public function index()
    {
        return view('admin.usuarios.registroequipo'); 

    }

    public function store(Request $request)
    {
      
        $parte = new Parte($request->all());
        $parte->save();
        $entrada = new Entrada($request->all()) ;
        $entrada->save();
        $equipo = new Equipo($request->all());
        $equipo->save();
            
        return 'siiiii';

    }

    public function getmodelos(Request $request){
        
        if($request->ajax()){

            $modelos = Modelo::where('marca_id', $request->marca_id)->get();
            foreach ($modelos as $modelo) {
                $modelosArray[$modelo->id]=$modelo->descripcion;                
            }
            return response()->json($modelosArray);
        }

    }

    
    public function getclientes(Request $request){
        
        if($request->ajax()){
            $clientes = Cliente::find($request->cliente_id);   
            $arregloCliente['identificacion'] = $clientes['identificacion'];
            return response()->json($arregloCliente);
        }

    }
   
}
