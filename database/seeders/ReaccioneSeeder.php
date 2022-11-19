<?php

namespace Database\Seeders;

use App\Models\Comentario;
use App\Models\Empleo;
use App\Models\Reaccione;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReaccioneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $reaccione = new Reaccione();

        $reaccione->publicacione_id ="1";
        $reaccione->user_id ="4";

        $reaccione->save();

        //
    }
        
}
