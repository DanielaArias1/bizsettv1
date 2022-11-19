<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $user = new User();

        $user->email ="jerri@bizsett.com";
        $user->password ="1234";
        $user->nombre ="Jerri";
        $user->apellidos ="Meneses Morales";
        $user->telefono ="3116332491";
        $user->numero_documento ="1234567890";
        $user->direccion ="Calle 2a 27-07";
        $user->tipodocumento_id ="1";
        $user->ciudade_id ="1";
        $user->genero_id ="1";
        $user->tipopersona_id ="2";
        $user->foto_perfil ="undraw_avatar.svg";

        $user->save();

        //Daniela
        $user2 = new User();

        $user2->email ="daniela@bizsett.com";
        $user2->password ="1234";
        $user2->nombre ="Daniela";
        $user2->apellidos ="Arias Montero";
        $user2->telefono ="3104516343";
        $user2->numero_documento ="1478523691";
        $user2->direccion ="Calle 1a 12-28";
        $user2->tipodocumento_id ="1";
        $user2->ciudade_id ="1";
        $user2->genero_id ="2";
        $user2->tipopersona_id ="2";
        $user2->foto_perfil ="undraw_avatar.svg";

        $user2->save();


        //Johan
        $user3 = new User();

        $user3->email ="jsebastian@bizsett.com";
        $user3->password ="1234";
        $user3->nombre ="Johan Sebastian";
        $user3->apellidos ="Velez Bedoya";
        $user3->telefono ="3123456789";
        $user3->numero_documento ="1478523699";
        $user3->direccion ="Calle 3a 30-30";
        $user3->tipodocumento_id ="1";
        $user3->ciudade_id ="1";
        $user3->genero_id ="1";
        $user3->tipopersona_id ="2";
        $user3->foto_perfil ="undraw_avatar.svg";

        $user3->save();

        //JFK

        $user4 = new User();

        $user4->email ="jfk@bizsett.com";
        $user4->password ="1234";
        $user4->nombre ="John";
        $user4->apellidos ="Fitzgerald Kennedy";
        $user4->telefono ="3151238526";
        $user4->numero_documento ="1478529857";
        $user4->direccion ="Calle 4 de la independencia";
        $user4->tipodocumento_id ="1";
        $user4->ciudade_id ="1";
        $user4->genero_id ="1";
        $user4->tipopersona_id ="1";
        $user4->foto_perfil ="undraw_avatar.svg";

        $user4->save();

        //Elon M. Tesla

        $user5 = new User();

        $user5->email ="spacex@bizsett.com";
        $user5->password ="1234";
        $user5->nombre ="Elon";
        $user5->apellidos ="Reeve Musk";
        $user5->telefono ="3101238526";
        $user5->numero_documento ="1951529857";
        $user5->direccion ="Calle X AE";
        $user5->tipodocumento_id ="1";
        $user5->ciudade_id ="1";
        $user5->genero_id ="1";
        $user5->tipopersona_id ="1";
        $user5->foto_perfil ="undraw_avatar.svg";

        $user5->save();

        //
    }
        
}
