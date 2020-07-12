<?php

use App\Marca;
use Illuminate\Database\Seeder;

class MarcasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Marca::create([
            'descripcion'=> 'Hytera'
        ]);

        Marca::create([
            'descripcion'=> 'Motorola'
        ]);

        Marca::create([
            'descripcion'=> 'Kenwood'
        ]);
    }
}
