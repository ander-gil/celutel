<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\PruebaCorreo;
use App\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function index(){

        
        $users = User::paginate(5);
        return view('admin.usuarios.index')->with(compact('users'));   
        
    }

    public function store(Request $request){
 
            
          
        $reglas=([
            'name' => 'required',
            'direccion' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|min:8',
            'identificacion'=>'required',
            'rol'=>'required',
           
        ]);

        $mensajes=[
            'name.required'=>'el campo de nombre es obligatorio',
            'email.required'=>'el campo de correo es obligatorio',
            'email.unique'=>'este correo ya se encuentra registrado',
            'password.min'=>'debe ingresar como minimo 8 digitos',
            'rol.required'=>'debe ingresar un rol para el usuario',
            'identificacion.required'=>'el campo de identificacion es obligatorio',
        ];
         
        $this->validate($request, $reglas, $mensajes);

        $user = new User();
        $user->name = $request->input('name');
        $user->apellido = $request->input('apellido');
        $user->direccion = $request->input('direccion');
        $user->email = $request->input('email');  
        $user->password = bcrypt($request->input('password')); 
        $user->identificacion = $request->input('identificacion');
        $user->rol = $request->input('rol');
       
        $user->save();
       // Mail::to($request->input('email'))->send(new PruebaCorreo($user));
        return back()->with('notificacion', 'Usuario Registrado Exitosamente');    

    }

    public function edit($id){

        $users = User::find($id);
        return view('admin.usuarios.edit')->with(compact('users'));  
    }

    public function update($id, Request $request){

        $reglas=[
            'name' => 'required',
            'direccion' => 'required',
           'password' => ['nullable','min:8'], 
            'identificacion'=>'required',
            'apellido'=>'required',
            'rol'=>'required',
        ];

        $mensajes=[
            'name.required'=>'el campo de nombre es obligatorio',  
            'name.required'=>'el campo de apellido es obligatorio',  
            'direccion.required'=>'el campo de nombre es obligatorio',        
            'password.min'=>'debe ingresar como minimo 8 digitos en el campo contraseña',
            'rol.required'=>'debe ingresar un rol para el usuario',
            'identificacion.required'=>'el campo de identificacion es obligatorio',
        ];


     $this-> Validate($request, $reglas, $mensajes);

      $user =  User::find($id);

        $user->name  = $request->input('name');
        $user->apellido  = $request->input('apellido');
        $user->direccion  = $request->input('direccion');
        $user->rol  = $request->input('rol');
        $password  = $request->input('password');
        if($password)
            $user->password = bcrypt($password);
      
        $user->save();
        return back()->with('notificacion', 'Usuario Editado Exitosamente');
    }

    public function destroy($id){

        $users = User::find($id);
        $users->delete();
        return back()->with('notificacion2', 'usuario eliminado Exitosamente');
    }
}
