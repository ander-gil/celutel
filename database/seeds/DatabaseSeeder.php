<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        factory(\App\Cliente::class,30)->create();
       // $this->call(UserSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(MarcasTableSeeder::class);
        $this->call(ModelosTableSeeder::class);
        $this->call(RepuestosTableSeeder::class);
       
        
    }
}
