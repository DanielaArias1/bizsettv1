<?php

namespace Database\Seeders;

use App\Models\Comentario;
use App\Models\Empleo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComentarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $comentario = new Comentario();

        $comentario->comentario ="Buenas";
        $comentario->publicacione_id ="1";
        $comentario->user_id ="4";

        $comentario->save();

        //
    }
        
}
