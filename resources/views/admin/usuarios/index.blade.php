@extends('layouts.app')

@section('content')


       
        <div class="card-body ">

          @if (session('notificacion2'))
          <div class="alert alert-success" role="alert">
                 {{ __('Usuario Eliminado Exitosamente')}}
          </div> 
         
            @endif

          @if (session('notificacion'))
          <div class="alert alert-success" role="alert">
                 {{ __('Usuario Registrado Exitosamente')}}
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
                  <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                </div>
                <div class="form-group col-md-5">
                  <label for="apellido">Apellido</label>
                  <input type="text" name="apellido" class="form-control" value="{{ old('apellido') }}">
                </div>
            </div>    

            <div class="form-row">
                <div class="form-group col-md-5">
                  <label for="direccion">*Direccion</label>
                  <input type="text" name="direccion" class="form-control" value="{{ old('direccion') }}">
                </div>
                <div class="form-group col-md-5">
                  <label for="email">*Correo</label>
                  <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                </div>
            </div> 

            <div class="form-row">
                <div class="form-group col-md-5">
                  <label for="password">*Contraseña</label>
                  <input type="text" name="password" class="form-control" value="{{ old('password', Str::random(8)) }}">
                </div>
                <div class="form-group col-md-5">
                  <label for="identificacion">*Cedula</label>
                  <input type="text" name="identificacion" class="form-control" value="{{ old('identificacion') }}">
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
                    <button class="btn btn-primary btn-block ">Regeistrar Empleado</button>
               </div>
          </div>          
               
               
            </form>
          </div>      

            <table class="table table-bordered table-active">
              <thead>
                  <tr>
                      <th scope="col">Email</th>
                      <th scope="col">Nombre</th>
                      <th scope="col">rol</th>
                      <th scope="col">Opciones</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($users as $user)                   
                
                  <tr>
                      <td>{{$user->email}}</td>
                      <td>{{$user->name}}</td>
                      <td>{{$user->rol}}</td>
                    <td>
                      <a href="/usuarios/{{$user->id}}" class="btn btn-sm btn-primary" title="Editar">
                          <svg class="bi bi-pencil" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z"/>
                              <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z"/>
                          </svg>
                      </a>
                    <form action="{{route('usuarios.destroy', $user->id)}}" method="POST">
                      @method('DELETE')
                      @csrf

                      <input type="submit"
                              value="eliminar"  
                              class="btn  btn-sm btn-danger"
                              onclick="return confirm('¿Desea Eliminar Este Usuario ?')">
                    </form>  
                  </td>
                  </tr>
                  @endforeach
              </tbody>
              {{ $users->links() }}
          </table>
       

       
    

@endsection