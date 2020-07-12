@extends('layouts.app')

@section('content')


       
        <div class="card-body ">

          @if (session('notificacion'))
          <div class="alert alert-success" role="alert">
                 {{ __('Usuario Actualizado Exitosamente')}}
          </div> 
         
            @endif

           @if(count($errors)>0)
        <div class="alert alert-danger" role="alert">
           <ul>
             @foreach ($errors->all() as $error)

                        <li>{{$error}}</li>
                 
             @endforeach
             
           </ul>
        </div>
        @endif

           
            <form action="" method="POST">
            {{ csrf_field()}}
            <div class="form-row">
                <div class="form-group col-md-5">
                  <label for="name">*Nombre</label>
                  <input type="text" name="name" class="form-control" value="{{ old('name', $users->name) }}">
                </div>
                <div class="form-group col-md-5">
                  <label for="apellido">Apellido</label>
                  <input type="text" name="apellido" class="form-control" value="{{ old('apellido', $users->apellido) }}">
                </div>
            </div>    

            <div class="form-row">
                <div class="form-group col-md-5">
                  <label for="direccion">*Direccion</label>
                  <input type="text" name="direccion" class="form-control" value="{{ old('direccion', $users->direccion) }}">
                </div>
                <div class="form-group col-md-5">
                  <label for="email">*Correo</label>
                  <input type="email" name="email" class="form-control" value="{{ old('email', $users->email) }}">
                </div>
            </div> 

            <div class="form-row">
                <div class="form-group col-md-5">
                  <label for="password">*Contraseña</label>
                  <input type="text" name="password" class="form-control" value="{{ old('password') }}">
                </div>
                <div class="form-group col-md-5">
                  <label for="identificacion">*Cedula</label>
                  <input type="text" name="identificacion" class="form-control" value="{{ old('identificacion', $users->identificacion) }}">
                </div>
            </div> 

          <div class="form-row">
            <div class="form-group col-md-5">
              <label for="rol">*Rol</label>
                  <select name="rol" class="form-control">
                    <option value="">Seleccionar</option>
                    <option value=1>Recepción</option>
                    <option value=2>Tecnico</option>
                </select>
            </div>
                <div class="form-group col-md-5 ">
                    <button class="btn btn-primary btn-block ">Actualizar Empleado</button>
               </div>
          </div>          
               
               
            </form>
          </div>      

@endsection