@extends('layouts.app')

@section('content')


       
        <div class="card-body ">

          @if (session('notificacion'))
          <div class="alert alert-success" role="alert">
                 {{ __('Cliente Registrado Exitosamente')}}
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
                  <label for="Name">*Nombre</label>
                  <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}">
                </div>
                <div class="form-group col-md-5">
                  <label for="apellido">Apellido</label>
                  <input type="text" name="apellido" class="form-control" value="{{ old('apellido') }}">
                </div>
            </div>    

            <div class="form-row">
                <div class="form-group col-md-5">
                  <label for="Name">*Direccion</label>
                  <input type="text" name="direccion" class="form-control" value="{{ old('direccion') }}">
                </div>
                <div class="form-group col-md-5">
                  <label for="apellido">*Correo</label>
                  <input type="email" name="correo" class="form-control" value="{{ old('correo') }}">
                </div>
            </div> 

            <div class="form-row">
                <div class="form-group col-md-5">
                  <label for="Name">*Telefono</label>
                  <input type="text" name="telefono" class="form-control" value="{{ old('telefono') }}">
                </div>
                <div class="form-group col-md-5">
                  <label for="apellido">*Nit o CC</label>
                  <input type="text" name="identificacion" class="form-control" value="{{ old('identificacion') }}">
                </div>
            </div> 

            <div class="form-row">
                <div class="form-group col-md-5">
                  <label for="Name">*Ciudad</label>
                  <input type="text" name="ciudad" class="form-control" value="{{ old('ciudad') }}">
                </div>
                <div class="form-group col-md-5">
                  <label for="apellido">Telefono Fijo</label>
                  <input type="text" name="telefono_fijo" class="form-control" value="{{ old('telefono_fijo') }}">
                </div>
            </div> 

            <div class="form-group  col-md-10">
                 <button class="btn btn-primary float-right">Regeistrar Cliente</button>
            </div>
               
               
            </form>
        </div>

       
    

@endsection