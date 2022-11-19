<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emprendimiento;
use App\Models\Empleo;
use App\Http\Requests\StoreEmpleo;
use App\Models\User;

class EmpleoController extends Controller
{

    public function index(){

        $empleos =Empleo::all();

        $empleos =Empleo::query()->when(request('search'), function($query) {
            return $query->where('mensaje_trabajo', 'like', '%' . request('search') . '%');
        })->paginate(5);

    return view('empleos.index', compact('empleos'));
    }


    public function create(){

        $emprendimientos =Emprendimiento::all();
        $users =User::all();

        return view('empleos.create', compact('emprendimientos', 'users'));
    }

    public function crear(Emprendimiento $emprendimiento){

        $emprendimientos =Emprendimiento::all();
        $users =User::all();

        return view('empleos.create_empleo', compact('emprendimientos', 'users', 'emprendimiento'));
    }




    public function store(StoreEmpleo $request, Emprendimiento $emprendimiento){

        $empleo = new Empleo();

            $empleo['evidencia'] = time() . '_' . $request->file(key: 'evidencia')->getClientOriginalName();
            $request->file(key: 'evidencia')->storeAs(path:'pdf_folder', name: $empleo['evidencia']);
            
            $empleo->mensaje_trabajo = $request->mensaje_trabajo;

        if (auth()->user()->tipopersona_id == '2'){
            $empleo->emprendimiento_id = $request->emprendimiento_id;
            $empleo->user_id = $request->user_id;
            $empleo->save();
            
            return redirect()->route('empleos.index');
        }
        else{
            
            $empleo->emprendimiento_id = $emprendimiento->id;
            $empleo->user_id = auth()->user()->id;
            $empleo->save();

            return redirect()->route('perfilemp.user', compact('emprendimiento'));
        }

    }

    

    public function edit(Empleo $empleo, ){

        $emprendimientos =Emprendimiento::all();
        $users =User::all();

        return view('empleos.edit', compact('empleo', 'emprendimientos', 'users'));
    }



    public function update(Request $request, Empleo $empleo){

            $empleo['evidencia'] = time() . '_' . $request->file(key: 'evidencia')->getClientOriginalName();
            $request->file(key: 'evidencia')->storeAs(path:'pdf_folder', name: $empleo['evidencia']);
            
            $empleo->mensaje_trabajo = $request->mensaje_trabajo;

        if (auth()->user()->tipopersona_id == '2'){
            $empleo->emprendimiento_id = $request->emprendimiento_id;
            $empleo->user_id = $request->user_id;
            $empleo->save();
            
            return redirect()->route('empleos.index');
        }
        // else{
            
        //     $empleo->emprendimiento_id = $emprendimiento->id;
        //     $empleo->user_id = auth()->user()->id;
        //     $empleo->save();

        //     return redirect()->route('home');
        // }
    }

    public function destroy(Empleo $empleo){
        $empleo->delete();

        return redirect()->route('empleos.index');
    }


   
    
}
