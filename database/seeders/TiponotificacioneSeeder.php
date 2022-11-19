<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tiponotificacione;


class TiponotificacioneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $tiponotificacion = new Tiponotificacione();

        $tiponotificacion->nombre_notificacion ="Comentario";

        $tiponotificacion->texto_notificacion ="Te han comentado una publicación";

        $tiponotificacion->save();

        //

        $tiponotificacion2 = new Tiponotificacione();

        $tiponotificacion2->nombre_notificacion ="Reacción";

        $tiponotificacion2->texto_notificacion ="Alguien ha reaccionado a una de tus publicaciones";

        $tiponotificacion2->save();
    }
}
