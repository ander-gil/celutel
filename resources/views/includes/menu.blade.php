<div class="panel panel-content">
    <div class="card-header text-center text-primary">Menú</div>
   
    @if (auth()->check())  
    <div class="card card-group">
      <a href="/home" class="list-group-item list-group-item-action @if(request()->is('home')) active @endif" >
        Dashboard
      </a>
      @if (! auth::user()->is_client) 
      <a href="/registroc" class="list-group-item list-group-item-action 
      @if(request()->is('registroc')) active @endif ">Registrar Cliente</a>

      @endif      
      <a href="/registros" class="list-group-item list-group-item-action 
      @if(request()->is('registros')) active @endif" >Registrar Solicitud
      </a>
     

      @if (auth::user()->is_admin) 
      <div class=" card card-group btn-group dropleft">
        <button type="button" class="list-group-item list-group-item-action" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Administrador
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="/usuarios">Usuarios</a>
          <a class="dropdown-item" href="#">Proyectos</a>
          <a class="dropdown-item" href="#">Configuracion</a>
        </div>
      </div>
      @endif
    </div>
      @else
      <div class="card card-group">
         <a href="/home" class="list-group-item list-group-item-action">
           Bienvenida
         </a>
         <a href="/ver" class="list-group-item list-group-item-action">Instrucciones
         </a>
         <a href="/reportar" class="list-group-item list-group-item-action ">Creditos
         </a>
    </div>
      @endif
    
  </div>



