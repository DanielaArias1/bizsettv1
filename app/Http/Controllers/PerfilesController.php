<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Models\Empleo;
use App\Models\Emprendimiento;
use App\Models\Follower;
use App\Models\Multimedia;
use App\Models\Perfile;
use App\Models\Publicacione;
use App\Models\Reaccione;
use App\Models\User;
use Illuminate\Http\Request;

class PerfilesController extends Controller
{
    public function index(User $user){

        return view('perfil', compact('user'));
    }

    public function misdatos(User $user){

        return view('misdatos', compact('user'));
    }

    public function fotoperfil(User $user){

        return view('subirfoto', compact('user'));
    }

    public function subirfoto(Request $request, User $user){

        if ($request->foto_perfil == ''){
            $user->foto_perfil = 'null';
        }
        else{
        $user['foto_perfil'] = time() . '_' . $request->file(key: 'foto_perfil')->getClientOriginalName();
        $request->file(key: 'foto_perfil')->storeAs(path:'fotos_perfiles', name: $user['foto_perfil']);
        }

        $user->save();

        return redirect()->route('home');

    }


    public function perfilemp(){

        $publicaciones =Publicacione::all();
        $multimedias =Multimedia::all();
        $emprendimientos =Emprendimiento::all();
        $empleos =Empleo::all();
        $users = User::all();
        $comentarios =Comentario::all();
        $reacciones =Reaccione::all();
        $followers = Follower::all();
        $reac = 'no';


        foreach ($emprendimientos as $emprendimiento){
            if (auth()->user()->id==$emprendimiento->user_id){
                return view('perfilemp', compact('publicaciones','multimedias', 'emprendimiento', 'users', 'followers','empleos', 'emprendimientos', 'comentarios', 'reacciones', 'reac'));
            }else{
                $emp = 1;
            }
        }
        if($emp == 1){
            return redirect()->route('emprendimientos.create');
        }

    }

    public function cuenta(Emprendimiento $emprendimiento){

        $publicaciones = Publicacione::all();
        $multimedias = Multimedia::all();
        $emprendimientos = Emprendimiento::all();
        $users = User::all();
        $comentarios = Comentario::all();
        $reacciones = Reaccione::all();
        $followers = Follower::all();

        return view('cuenta', compact('emprendimiento', 'publicaciones','multimedias', 'emprendimientos', 'users', 'comentarios', 'reacciones', 'followers'));
    }

}
