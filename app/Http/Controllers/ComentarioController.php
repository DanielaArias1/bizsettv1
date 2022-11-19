<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComentario;
use App\Models\Comentario;

use App\Models\Publicacione;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    public function store(StoreComentario $request, $publicacione){

        $comentario = new Comentario();

        $comentario->comentario = $request->comentario;
        $comentario->publicacione_id = $publicacione;
        $comentario->user_id = auth()->user()->id;

        $comentario->save();

        $tipo = '1';

        return redirect()->route('notificaciones', compact('publicacione', 'tipo'));
        //return redirect()->route('home');
        
    }

    public function destroy(Comentario $comentario){
        
        $comentario->delete();
        
        return redirect()->route('home');
    }
}
