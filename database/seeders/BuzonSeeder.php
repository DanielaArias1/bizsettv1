<?php

namespace Database\Seeders;

use App\Models\Buzon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BuzonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $buzon = new Buzon();

        $buzon->mensaje ="Buena aplicación pero...";
        $buzon->user_id ="5";

        $buzon->save();

        //
    }
        
}
