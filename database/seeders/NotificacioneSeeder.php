<?php

namespace Database\Seeders;

use App\Models\Notificacione;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NotificacioneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $notificacione = new Notificacione();

        $notificacione->reading ="true";
        $notificacione->tiponotificacione_id = "1";
        $notificacione->user_id ="5";

        $notificacione->save();

        //
    }
        
}
