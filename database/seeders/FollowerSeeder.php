<?php

namespace Database\Seeders;

use App\Models\Empleo;
use App\Models\Follower;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FollowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $follower = new Follower();

        $follower->emprendimiento_id ="1";
        $follower->user_id ="4";

        $follower->save();

        //
    }
        
}
