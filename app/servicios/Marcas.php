<?php

namespace App\servicios;
use App\Marca;

class Marcas
{
   public function get()
   {
       $marca = Marca::get();
       $marcaarrays['']='Seleccione Marca';
       foreach ($marca as $marcas) {
           $marcaarrays[$marcas->id]= $marcas->descripcion;
       }
     
       return $marcaarrays;
   }
}
