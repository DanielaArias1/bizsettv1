<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emprendimiento;
use App\Http\Requests\StoreEmprendimiento;
use App\Models\User;

class EmprendimientoController extends Controller
{

    public function index(){

        $emprendimientos =Emprendimiento::all();

        $emprendimientos = Emprendimiento::query()->when(request('search'), function($query) {
            return $query->where('nombre_emprendimiento', 'like', '%' . request('search') . '%')
            ->orWhere('clasificacion', 'like', '%' . request('search') . '%')
            ->orWhere('descripcion', 'like', '%' . request('search') . '%');
        })->paginate(5);

    return view('emprendimientos.index', compact('emprendimientos'));
    }

    


     public function create(){

        $users =User::all();

        if (auth()->user()->tipopersona_id == '2'){
            return view('emprendimientos.create', compact('users'));
        }else{
            return view('emprendimientos.create_emprendimiento', compact('users'));
        }
    }




    public function store(StoreEmprendimiento $request){

        $users =User::all();

        if (auth()->user()->tipopersona_id == '2'){

        $emprendimiento = Emprendimiento::create($request->all());
        return redirect()->route('emprendimientos.index');
        }else{
        $emprendimiento = new Emprendimiento();

        $emprendimiento->nombre_emprendimiento = $request->nombre_emprendimiento;
        $emprendimiento->clasificacion = $request->clasificacion;
        $emprendimiento->descripcion = $request->descripcion;
        $emprendimiento->user_id = auth()->user()->id;

        

        $emprendimiento->save();

        return redirect()->route('perfilemp.me');
        }
    }

    

    public function edit(Emprendimiento $emprendimiento){

        if (auth()->user()->tipopersona_id == '2'){
            return view('emprendimientos.edit', compact('emprendimiento'));
        }else{
            return view('edit_emprendimiento', compact('emprendimiento'));
        }
    }



    public function update(Request $request, Emprendimiento $emprendimiento){

        $request->validate([
            'nombre_emprendimiento'=>'Required',
            'clasificacion'=>'Required',
            'descripcion'=>'Required',
        ]);

        /*$curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();*/

        $emprendimiento->update($request->all());
        $emprendimientos =Emprendimiento::all();
        if (auth()->user()->tipopersona_id == '2'){
        return view('emprendimientos.index',  compact('emprendimientos'));
        }
        else{
            return redirect(route('perfilemp.me'));
        }
    }

    public function destroy(Emprendimiento $emprendimiento){
        $emprendimiento->delete();

        return redirect()->route('emprendimientos.index');
    }


   
    
}
