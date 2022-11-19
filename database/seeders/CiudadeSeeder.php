<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ciudade;


class CiudadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $ciudade = new Ciudade();

        $ciudade->nombre_ciudad ="Bogotá";
        $ciudade->departamento_id ="1";

        $ciudade->save();

        //
    }
        
}
