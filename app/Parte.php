<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parte extends Model
{
    protected $fillable = [
        'ta', 'cv', 'pv', 'at',
        'bt',     
    ];

  /*  public function setSiAttribute($valor){

        $this->attributes['ta']=($valor == 'on')? "si" : "no";

    }*/
}
