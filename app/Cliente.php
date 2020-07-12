<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'nombre', 'apellido', 'direccion', 'correo', 'telefono',
        'identificacion', 'ciudad', 'telefono_fijo',        
    ];

    public function radios()
    {
        return $this->hasMany(Equipo::class);
        
    }
}
