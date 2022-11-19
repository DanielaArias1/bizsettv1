<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Inversionista;

class InversionistaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $inversionista = new Inversionista();

        $inversionista->propuesta ="Quiero invertir quiño por eln 99%";
        $inversionista->emprendimiento_id ="1";
        $inversionista->user_id ="4";

        $inversionista->save();

        //
    }
        
}
