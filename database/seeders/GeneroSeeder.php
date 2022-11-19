<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genero;


class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $genero = new Genero();

        $genero->nombre_genero ="Masculino";

        $genero->save();

        //

        $genero2 = new Genero();

        $genero2->nombre_genero ="Femenino";

        $genero2->save();

        //

        $genero3 = new Genero();

        $genero3->nombre_genero ="Otro";

        $genero3->save();
    }
}
