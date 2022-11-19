<?php

namespace Database\Seeders;

use App\Models\Empleo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmpleoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $empleo = new Empleo();

        $empleo->evidencia ="documento.pdf";
        $empleo->mensaje_trabajo ="quisiera postularme para el puesto de...";
        $empleo->emprendimiento_id ="1";
        $empleo->user_id ="4";

        $empleo->save();

        //
    }
        
}
