<?php

use App\Repuesto;
use Illuminate\Database\Seeder;

class RepuestosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Repuesto::create([
            'descripcion'=>'control volumen ep450'
        ]);

        Repuesto::create([
            'descripcion'=>'control canal dep450'
        ]);

        Repuesto::create([
            'descripcion'=>'tapa accesorios dtr620'
        ]);
    }
}
