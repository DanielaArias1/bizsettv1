<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\StoreUser;
use App\Models\Tipodocumento;
use App\Models\Genero;
use App\Models\Ciudade;
use App\Models\Departamento;
use App\Models\Tipopersona;
use App\Models\User;


class UserController extends Controller
{
    
    public function index(){

        $users =User::all();
        $departamentos =Departamento::all();
        $ciudades =Ciudade::all();

        $users = User::query()->when(request('search'), function($query) {
            return $query->where('nombre', 'like', '%' . request('search') . '%')
            ->orWhere('apellidos', 'like', '%' . request('search') . '%');
        })->paginate(5);

    return view('users.index', compact('users', 'departamentos', 'ciudades'));
    }


     public function create(){

        $tipodocumentos =Tipodocumento::all();
        $generos =Genero::all();
        $ciudades =Ciudade::all();
        $tipopersonas =Tipopersona::all();

        return view('users.create', compact('tipodocumentos', 'generos', 'ciudades', 'tipopersonas'));
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
        $user->tipopersona_id = $request->tipopersona_id;

        if ($request->foto_perfil == ''){
            $user->foto_perfil = 'null';
        }
        else{
        $user['foto_perfil'] = time() . '_' . $request->file(key: 'foto_perfil')->getClientOriginalName();
        $request->file(key: 'foto_perfil')->storeAs(path:'fotos_perfiles', name: $user['foto_perfil']);
        }


        $user->save();

        return redirect()->route('users.index');
        
    }

    

    public function edit(User $user){

        $tipodocumentos =Tipodocumento::all();
        $generos =Genero::all();
        $ciudades =Ciudade::all();
        $tipopersonas =Tipopersona::all();

        return view('users.edit', compact('user', 'tipodocumentos', 'generos', 'ciudades', 'tipopersonas'));
    }



    public function update(Request $request, User $user){

        $request->validate([
            'nombre'=>'Required',
            'apellidos'=>'Required',
            'telefono'=>'Required',
            'numero_documento'=>'Required',
            'direccion'=>'Required'
        ]);


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
        $user->tipopersona_id = $request->tipopersona_id;

        $user->save();

        return redirect(route('users.index'));
        
    }

    public function destroy(User $user){
        
        $user->delete();

        return redirect()->route('users.index');
    }

    public function actualizar(Request $request, User $user){

        $request->validate([
            'nombre'=>'Required',
            'apellidos'=>'Required',
            'telefono'=>'Required',
            'direccion'=>'Required'
        ]);


        $user->email = $request->email;
        $user->password = $request->password;
        $user->nombre = $request->nombre;
        $user->apellidos = $request->apellidos;
        $user->telefono = $request->telefono;
        $user->direccion = $request->direccion;

        $user->save();

        return redirect(route('home'));

        //return $user;
        
    }

}

