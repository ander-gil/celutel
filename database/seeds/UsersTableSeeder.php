<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'celutel',
            'apellido'=>'comunicaciones',
            'identificacion'=>'805006463-4',
            'email'=>'ingenieria@celutel.com',
            'password'=> bcrypt('12345678'),
            'rol'=>0,
        ]);


        User::create([
            'name'=>'Maria Fernanda',
            'apellido'=>'varona',
            'identificacion'=>'1141745820265',
            'email'=>'recepcion@celutel.com',           
            'password'=> bcrypt('12345678'),
            'rol'=>1, 
        ]);

        User::create([
            'name'=>'Mario',
            'apellido'=>'Ramos',
            'identificacion'=>'29882654',
            'email'=>'laboratorio@celutel.com',           
            'password'=> bcrypt('12345678'),
            'rol'=>2, 
        ]);
    }
}
