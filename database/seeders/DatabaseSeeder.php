<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(TipopersonaSeeder::class);

        $this->call(TipodocumentoSeeder::class);

        $this->call(TiponotificacioneSeeder::class);

        $this->call(GeneroSeeder::class);

        $this->call(DepartamentoSeeder::class);

        $this->call(CiudadeSeeder::class);

        $this->call(UserSeeder::class);

        $this->call(EmprendimientoSeeder::class);

       $this->call(PublicacioneSeeder::class);

       $this->call(MultimediaSeeder::class);

       $this->call(InversionistaSeeder::class);

       $this->call(EmpleoSeeder::class);

       $this->call(BuzonSeeder::class);

       $this->call(ComentarioSeeder::class);

       $this->call(ReaccioneSeeder::class);

       $this->call(FollowerSeeder::class);

       $this->call(NotificacioneSeeder::class);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
