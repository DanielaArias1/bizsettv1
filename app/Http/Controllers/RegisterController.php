<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Tipodocumento;
use App\Models\Genero;
use App\Models\Ciudade;
use App\Http\Requests\StoreUser;

class RegisterController extends Controller
{
    
    public function index(){

        $tipodocumentos =Tipodocumento::all();
        $generos =Genero::all();
        $ciudades =Ciudade::all();
        return view('auth.register', compact('tipodocumentos', 'generos', 'ciudades'));
    }

    public function store(StoreUser $request){

        $user = new User();
        $user->email = $request->email;
        $user->password = $request->password;
        $user->nombre = $request->nombre;
        $user->apellidos = $request->apellidos;
        $user->telefono = $request->telefono;
        $user->numero_documento = $request->numero_documento;
        $user->direccion = $request->direccion;
        $user->tipodocumento_id = $request->tipodocumento_id;
        $user->ciudade_id = $request->ciudade_id;
        $user->genero_id = $request->genero_id;
        $user->tipopersona_id = '1';
        $user->foto_perfil = 'undraw_avatar.svg';
        


        $user->save();


        auth()->login($user);
        return redirect()->route('home');

    }
}
