<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emprendimiento;
use App\Models\Inversionista;
use App\Http\Requests\StoreInversionista;
use App\Models\User;

class InversionistaController extends Controller
{

    public function index(){

        $inversionistas =Inversionista::all();

        $inversionistas =Inversionista::query()->when(request('search'), function($query) {
            return $query->where('propuesta', 'like', '%' . request('search') . '%');
        })->paginate(5);

    return view('inversionistas.index', compact('inversionistas'));
    }

    


    public function create(){

        $emprendimientos =Emprendimiento::all();
        $users =User::all();

        $emprendimiento = "1";

        return view('inversionistas.create', compact('emprendimientos', 'users', 'emprendimiento'));
    }
    

    public function crear(Emprendimiento $emprendimiento){
        $emprendimientos =Emprendimiento::all();
        $users =User::all();

        return view('inversionistas.create_inversiones', compact('emprendimientos', 'users', 'emprendimiento'));
    }




    public function store(StoreInversionista $request, Emprendimiento $emprendimiento){

        if (auth()->user()->tipopersona_id == '2'){
            //$inversionista = Inversionista::create($request->all());

            $inversionista = new Inversionista();
            $inversionista->propuesta = $request->propuesta;
            $inversionista->user_id = $request->user_id;
            $inversionista->emprendimiento_id = $request->emprendimiento_id;
            $inversionista->save();

            return redirect()->route('inversionistas.index');
        }
        else{

            $inversionista = new Inversionista();
            $inversionista->propuesta = $request->propuesta;
            $inversionista->emprendimiento_id = $emprendimiento->id;
            $inversionista->user_id = auth()->user()->id;
            $inversionista->save();

            
            return redirect()->route('perfilemp.user', $emprendimiento);
        }
        
    }

    

    public function edit(Inversionista $inversionista){
        
        $emprendimientos =Emprendimiento::all();

        return view('inversionistas.edit', compact('inversionista', 'emprendimientos'));
    }



    public function update(Request $request, Inversionista $inversionista){

        $request->validate([
            
            'propuesta'=>'Required',
            
        ]);


        $inversionista->update($request->all());
        $inversionistas =Inversionista::all();
        if (auth()->user()->tipopersona_id == '2'){
        return view('inversionistas.index',  compact('inversionistas'));
        }
        else{
            redirect(route('home'));
        }
    }

    public function destroy(Inversionista $inversionista){

        $inversionista->delete();
        if (auth()->user()->tipopersona_id == '2'){
        return redirect()->route('inversionistas.index');
        }
        else{
            redirect(route('home'));
        }
     }


   
    
}
