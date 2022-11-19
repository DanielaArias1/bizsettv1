<?php

namespace App\Http\Controllers;

use App\Events\NotificacionEvent;
use App\Models\Emprendimiento;
use App\Models\Notificacione;
use App\Models\Publicacione;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificacioneController extends Controller
{
    public function notifView(){
        

        return view('notificaciones');
        //return redirect()->route('home');
        
    }

    public function notificaciones(Publicacione $publicacione, $tipo){

        $users = User::all();
        $emprendimientos = Emprendimiento::all();
        
        foreach($emprendimientos as $emprendimiento){
            if($emprendimiento->id == $publicacione->emprendimiento_id){
                foreach($users as $user){
                    if($user->id == $emprendimiento->user_id){

                        $notificacione = new Notificacione();

                        $notificacione->reading= 'false';
                        $notificacione->tiponotificacione_id = $tipo;
                        $notificacione->user_id = $user->id;
                        
                        $notificacione->save();

                    }
                }
            }
        }
        
        return redirect()->route('home');
    }

    

    public function read(Notificacione $notificacione){
            $user = Auth::user();
                
            $notificacione->reading = 'true';
            $notificacione->save();
        
          return redirect(route('home'));
    }


}
