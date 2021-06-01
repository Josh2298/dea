<?php

namespace Database\Seeders;

use App\Models\User;
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
        // \App\Models\User::factory(10)->create();
        User::create([
            'nombres'=>'Onayda',
            'apellidop'=>'Cossio',
            'apellidom'=>'Alanes',
            'email'=>'dea.evaluacion@gmail.com',
            'password'=>bcrypt('utodea2021')
        ]);
    }
}
