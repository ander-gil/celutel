@extends('layouts.app')

@section('content')

@inject('cliente', 'App\servicios\Clientes')
@inject('marca', 'App\servicios\Marcas')



       
<form action="" method="POST">
         {{ csrf_field()}}
         <div class="form-row">
           <div class="form-group col-md-4">
                 <label for="Name">*fecha</label>
                 <input type="date" name="fechaentrada" class="form-control float-sm-left" value="{{ old('fechaentrada', date('y-m-d')) }}">
            </div>
         </div>  
      <div class="form-row">
          <div class="form-group col-md-5">
            <label for="exampleFormControlSelect1">*Cliente</label>
           
            <select id="nombre" name="nombre" class="form-control" id="exampleFormControlSelect1">
              @foreach ($cliente->get() as $index => $clientes)
              <option value="{{$index }}"{{old ('cliente')== $index ? 'selected': ''}}>
                {{$clientes}}
              </option>
              @endforeach
              </select>         
          </div>

        <input type="hidden" name="cliente_id" id="cliente_id" >

          <div class="form-group col-md-5 ml-5">
                <label for="apellido">Apellido</label>
                <input id="apellido" type="text" name="apellido" value="" class="form-control">
          </div>            
              
        <div class="form-group purple-border col-md-12">
          <label for="exampleFormControlTextarea4">Observaciones:</label>
          <textarea name="observaciones" class="form-control" id="exampleFormControlTextarea4" rows="5"></textarea>
        </div>

        <div class="form-inline purple-border col-md-12">  
                  
          <div class="form-check mb-2 mr-sm-2">
         
            <input type="text" name="serie" class="form-control" placeholder="ingrese serie"  value="{{ old('serie') }}">
              
          </div>

          <div class="form-check mb-2 mr-sm-2">
          
            <select id="marca" name="marca" class="form-control" id="exampleFormControlSelect1">
              @foreach ($marca->get() as $marca_id => $marcas)            
            <option value="{{$marca_id }}"{{old ('marca')== $marca_id ? 'selected': ''}}>
              {{$marcas}}
            </option>
              @endforeach
            </select>
          </div>

          <div class="form-check mb-2 mr-sm-2">
    
            <select name="modelo" id="modelo" class="form-control" >
              
            </select>
          </div>

          <input type="hidden" name="marca_id" id="marca_id">

          <div class="form-check mb-2 mr-sm-2">
      
            <select name="tipo" class="form-control" id="exampleFormControlSelect1">
              <option value="">SELECCIONAR</option>
              <option value="portatil">PORTATIL</option>
              <option value="base">BASE</option>
              <option value="repetidor">REPETIDOR</option>
              <option value="fuente">FUENTE</option>
              <option value="otros">OTROS</option>
      
            </select>
          </div>

             <div class="form-check mb-2 mr-sm-2">
                 
                   <label class="form-check-label" for="inlineFormCheck">
                    <input type="hidden"  name="ta" value="no">
                    <input type="checkbox" name="ta" value="si">
                   TA
                   </label>
              </div>

               <div class="form-check mb-2 mr-sm-2">
                    
                    <label class="form-check-label" for="inlineFormCheck">
                      <input type="hidden"  name="cv" value="no">
                      <input type="checkbox" name="cv" value="si">
                      CV
                    </label>
               </div>

               <div class="form-check mb-2 mr-sm-2">
                     
                     <label class="form-check-label" for="inlineFormCheck">
                      <input type="hidden"  name="pv" value="no">
                    <input type="checkbox" name="pv" value="si">
                       Pv
                     </label>
               </div>

               <div class="form-check mb-2 mr-sm-2">
                 
                   
                    <label class="form-check-label" for="inlineFormCheck">
                      <input type="hidden"  name="at" value="no">
                      <input type="checkbox" name="at" value="si">
                       AT
                    </label>
               </div>

               <div class="form-check mb-2 mr-sm-2">
                   
                    <label class="form-check-label" for="inlineFormCheck">
                      <input type="hidden"  name="bt" value="no">
                      <input type="checkbox" name="bt" value="si">
                      BT
                    </label>
               </div>

               <div class="form-check mb-2 mr-sm-2">
                   <button class="btn btn-sm btn-primary">ingresar radio </button>
               </div>
              
         </div>          
        
</form>          
@endsection

@section('script')
    <script>

      $(document).ready(function(){
        $('#marca').on ('change', function(){
          var marca_id = $(this).val();
          if($.trim(marca_id) !=''){
            $.get('modelos', {marca_id : marca_id}, function(modelos){
              
              $('#modelo').empty();
              $('#modelo').append("<option value=''>Selecciona un Modelo</option>");
              $('#marca_id').val(marca_id); 
              $.each(modelos, function(index, value){
                $('#modelo').append("<option value='" + index + "'>" + value + "</option>");
              })
            })
          }
        })

        $('#nombre').on('change', function(){
          let cliente_id = $(this).val();
          if(cliente_id != ''){
            $.get('clientes', {cliente_id : cliente_id}, function(clientes){
              $('#apellido').val(clientes.identificacion); 
              $('#cliente_id').val(cliente_id); 
              
            })
          }
        })


      })

    </script>
@endsection