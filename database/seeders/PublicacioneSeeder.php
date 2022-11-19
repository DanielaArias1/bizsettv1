<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Publicacione;
use App\Models\Emprendimiento;

class PublicacioneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1

        $publicacione = new Publicacione();

        $publicacione->descripcion ="Buenos días";
        $publicacione->emprendimiento_id ="1";

        $publicacione->save();

        //2

        $publicacione2 = new Publicacione();

        $publicacione2->descripcion ="Buenas tardes";
        $publicacione2->emprendimiento_id ="1";

        $publicacione2->save();

        //3

        $publicacione3 = new Publicacione();

        $publicacione3->descripcion ="Buenas noches";
        $publicacione3->emprendimiento_id ="1";

        $publicacione3->save();

        //4

        $publicacione4 = new Publicacione();

        $publicacione4->descripcion ="Hasta mañana";
        $publicacione4->emprendimiento_id ="2";

        $publicacione4->save();

        //5

        $publicacione5 = new Publicacione();

        $publicacione5->descripcion ="Hasta luego";
        $publicacione5->emprendimiento_id ="2";

        $publicacione5->save();

        //6

        $publicacione6 = new Publicacione();

        $publicacione6->descripcion ="Hasta pronto";
        $publicacione6->emprendimiento_id ="3";

        $publicacione6->save();

        //7

        $publicacione7 = new Publicacione();

        $publicacione7->descripcion ="Adiós";
        $publicacione7->emprendimiento_id ="3";

        $publicacione7->save();

    }
        
}
