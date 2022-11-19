<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ciudade;
use App\Models\Emprendimiento;

class EmprendimientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Bizsett

        $emprendimiento = new Emprendimiento();

        $emprendimiento->nombre_emprendimiento ="Bizsett";
        $emprendimiento->clasificacion ="Comunidad";
        $emprendimiento->descripcion ="Comunidad de emprendimientos locales";
        $emprendimiento->user_id ="1";

        $emprendimiento->save();

        //USA

        $emprendimiento2 = new Emprendimiento();

        $emprendimiento2->nombre_emprendimiento ="United States";
        $emprendimiento2->clasificacion ="Capitalismo";
        $emprendimiento2->descripcion ="Estados Unidos es un país de 50 estados que ocupa una extensa franja de América del Norte, con Alaska en el noroeste y Hawái que extiende la presencia del país en el océano Pacífico.";
        $emprendimiento2->user_id ="4";

        $emprendimiento2->save();

        //Tesla

        $emprendimiento3 = new Emprendimiento();

        $emprendimiento3->nombre_emprendimiento ="Tesla";
        $emprendimiento3->clasificacion ="Tecnología";
        $emprendimiento3->descripcion ="Tesla ​ es una empresa estadounidense con sede en Austin, Texas, y liderada por Elon Musk, que diseña, fabrica y vende automóviles eléctricos, componentes para la propulsión de vehículos eléctricos, techos solares, instalaciones solares fotovoltaicas y baterías domésticas.​";
        $emprendimiento3->user_id ="5";

        $emprendimiento3->save();

        //
    }
        
}
