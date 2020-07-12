<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    protected $fillable = [
        'fechaentrada', 'revisado', 'reparado'
    ];

    public function servicios()
    {
        return $this->belongsToMany(Servicio::class);
    }

    public function equipos()
    {
        return $this->belongsToMany(Equipo::class);
    }
}
