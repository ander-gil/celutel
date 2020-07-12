<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{

    protected $fillable = [
        'Descripcion', 'baja',            
    ];



    public function entradas()
    {
        return $this->belongsToMany(Entrada::class);
    }

    public function equipos()
    {
        return $this->belongsToMany(Equipo::class);
    }
}

