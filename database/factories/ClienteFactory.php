<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cliente;
use Faker\Generator as Faker;

$factory->define(Cliente::class, function (Faker $faker) {
    return [
        
        'nombre'=> $faker->name,
        'apellido'=> $faker->name,
        'direccion'=> $faker->address,
        'correo'=> $faker->email,
        'telefono'=> $faker->phoneNumber,
        'identificacion'=> $faker->creditCardNumber,
        'ciudad'=> $faker->country,
        'telefono_fijo'=> $faker->sentence,
    ];
});
