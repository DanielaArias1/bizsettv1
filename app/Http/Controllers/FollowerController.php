<?php

namespace App\Http\Controllers;

use App\Models\Follower;
use Illuminate\Http\Request;

class FollowerController extends Controller
{

    //Seguir
    public function store($emprendimiento){

        $follower = new Follower();

        $follower->emprendimiento_id = $emprendimiento;
        $follower->user_id = auth()->user()->id;

        $follower->save();

        $tipo = '3';

        //return redirect()->route('notificaciones', compact('publicacione', 'tipo'));
        return redirect()->route('perfilemp.user', compact('emprendimiento'));
    }


    


    //Dejar de seguir

    public function destroy(Follower $follower){
        
        $emprendimiento = $follower->emprendimiento_id;
        $follower->delete();
        
        return redirect()->route('perfilemp.user', compact('emprendimiento'));
        
    }
}
