<?php

namespace App\servicios;
use App\Cliente;

class Clientes
{
   public function get()
   {
       $cliente = Cliente::get();
       $clientesarrays['']='Seleccione Clientes';
       foreach ($cliente as $clientes) {
           $clientesarrays[$clientes->id]= $clientes->nombre;
       }
     
       return $clientesarrays;
   }
}
