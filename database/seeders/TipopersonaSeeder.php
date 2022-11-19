<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tipopersona;






class TipopersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipopersona = new Tipopersona();

        $tipopersona->id ="1";
        $tipopersona->nombre ="Usuario";

        $tipopersona->save();


        $tipopersona2 = new Tipopersona();

        $tipopersona2->id ="2";
        $tipopersona2->nombre ="Administrador";

        $tipopersona2->save();
    }
}
