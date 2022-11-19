<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Models\Empleo;
use App\Models\Emprendimiento;
use App\Models\Multimedia;
use Illuminate\Http\Request;
use App\Models\Publicacione;
use App\Models\Reaccione;
use App\Models\User;

class HomeController extends Controller
{
    public function __invoke(){

        //$publicaciones =Publicacione::orderBy('id', 'desc')->paginate();
        $multimedias =Multimedia::all();
        $emprendimientos =Emprendimiento::all();
        $comentarios =Comentario::all();
        $reacciones =Reaccione::all();
        $users =User::all();

        $publicaciones = Publicacione::query()->when(request('search'), function($query) {
                return $query->where('descripcion', 'like', '%' . request('search') . '%');
            })->orderBy('id', 'desc')->paginate(5);


        return view('home', compact('publicaciones','multimedias', 'emprendimientos', 'users', 'comentarios', 'reacciones'));
    }


    
    public function panel(){

        return view('layouts.dashboard');
    }



    public function principal(){

        $publicaciones =Publicacione::all();
        $multimedias =Multimedia::all();

        return view('principal', compact('publicaciones', 'multimedias'));
    }



    public function prueba(){

        return view('prueba');
    }
}
