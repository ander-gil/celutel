<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $fillable = [
        'serie', 'marca_id', 'modelo', 'tipo', 
        'cliente_id', 
            
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function entradas()
    {
        return $this->belongsToMany(Entrada::class);
    }

    public function servicios()
    {
        return $this->belongsToMany(Servicio::class);
    }
}

