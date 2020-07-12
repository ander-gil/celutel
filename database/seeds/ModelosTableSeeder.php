<?php

use App\Modelo;
use Illuminate\Database\Seeder;

class ModelosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Modelo::create([
            'descripcion'=> 'EP450',
            'marca_id'=>2           
        ]);

        Modelo::create([
            'descripcion'=> 'PD506',
            'marca_id'=>1           
        ]);

        Modelo::create([
            'descripcion'=> 'TK2000',
            'marca_id'=>3           
        ]);
    }
}
