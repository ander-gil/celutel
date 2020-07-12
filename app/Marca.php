<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $fillable = [
        'Descripcion',             
    ];

    public function modelos()
    {
        return $this->hasMany(Modelo::class);
        
    }
}
