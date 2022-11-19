<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tipodocumento;

class TipodocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tipodocumento = new Tipodocumento();

        $tipodocumento->nombre ="C.C";

        $tipodocumento->save();

        //

        $tipodocumento2 = new Tipodocumento();

        $tipodocumento2->nombre ="C.E";

        $tipodocumento2->save();

        //

        $tipodocumento3 = new Tipodocumento();

        $tipodocumento3->nombre ="T.I";

        $tipodocumento3->save();
    }
}
