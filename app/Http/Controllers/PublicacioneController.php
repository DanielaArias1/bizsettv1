<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emprendimiento;
use App\Models\Publicacione;
use App\Models\Multimedia;
use App\Http\Requests\StorePublicacione;
use Illuminate\Cache\Events\KeyForgotten;
use Illuminate\Cache\Events\KeyWritten;
use Illuminate\Support\Facades\DB;
use PhpParser\Parser\Multiple;

class PublicacioneController extends Controller
{

    public function index(){

        $publicaciones =Publicacione::all();
        $multimedias =Multimedia::all();

        $publicaciones = Publicacione::query()->when(request('search'), function($query) {
            return $query->where('descripcion', 'like', '%' . request('search') . '%');
        })->paginate(5);
    

    return view('publicaciones.index', compact('publicaciones', 'multimedias'));
    }

    


    public function create(){

        $emprendimientos =Emprendimiento::all();
        
        if (auth()->user()->tipopersona_id == '2'){
            return view('publicaciones.create', compact('emprendimientos'));
        }else{
            return view('publicaciones.create_post', compact('emprendimientos'));
        }
    }




    public function store(StorePublicacione $request){

        $emprendimientos =Emprendimiento::all();

        //Si el usuario es administrador

        if (auth()->user()->tipopersona_id == '2'){
            
            $publicacione = new Publicacione();
            
            $file=$request->file("url_contenido");
            $nombreArchivo = "img_".time().".".$file->guessExtension();
            $request->file('url_contenido')->storeAs('multimedia_folder', $nombreArchivo );
            $temp= $publicacione->create(['descripcion'=>$request->descripcion, 'emprendimiento_id'=>$request->emprendimiento_id])->multimedias()->create(['url_contenido'=>$nombreArchivo]);
            $publicacione=Publicacione::find($temp->multimediaable_id);

            return redirect()->route('publicaciones.index');
        }
        else{
            // $publicacione = new Publicacione();
            // $publicacione->descripcion = $request->descripcion;
            
            foreach ($emprendimientos as $emprendimiento){
                if (auth()->user()->id==$emprendimiento->user_id){
                    $Emprendimiento = $emprendimiento->id;
                };
                }
            // $publicacione->save();



            // $multimedia = new Multimedia();
        
            // $multimedia['url_contenido'] = time() . '_' . $request->file(key: 'url_contenido')->getClientOriginalName();
            // $request->file(key: 'url_contenido')->storeAs(path:'multimedia_folder', name: $multimedia['url_contenido']);
            
            // /*$multimedia['url_contenido'] = time() . '_' . $request->file(key: 'url_contenido')->getClientOriginalName();
            // $request->file(key: 'url_contenido')
            // ->storeAs(path:'multimedia_folder/' . auth()->id(), name: $multimedia['url_contenido']);*/
            
            // $multimedia->save();
            
            // return redirect()->route('publicaciones.multimedia', compact('multimedia', 'publicacione'));
            $publicacione = new Publicacione();
        
            // $file=$request->file("url_contenido");
            // $nombreArchivo = "img_".time().".".$file->guessExtension();
            // $request->file('url_contenido')->storeAs('imagenes', $nombreArchivo );
            // $temp= $publicacione->create(['descripcion'=>$request->descripcion])->multimedias()->create(['url_contenido'=>$nombreArchivo]);
    
            $file=$request->file("url_contenido");
            $nombreArchivo = "img_".time().".".$file->guessExtension();
            $request->file('url_contenido')->storeAs('multimedia_folder', $nombreArchivo );
            $temp= $publicacione->create(['descripcion'=>$request->descripcion, 'emprendimiento_id'=>$Emprendimiento])->multimedias()->create(['url_contenido'=>$nombreArchivo]);
            $publicacione=Publicacione::find($temp->multimediaable_id);

                 
            return redirect(route('home'));
        }
       

        
        
    }
    

    public function edit(Publicacione $publicacione ){

        $emprendimientos =Emprendimiento::all();
        $multimedias = Multimedia::all();
        foreach($multimedias as $multimedia){
            if($multimedia->publicacion_id == $publicacione->id){
            }
        }

        if (auth()->user()->tipopersona_id == '2'){
            return view('publicaciones.edit', compact('publicacione', 'emprendimientos', 'multimedia'));
        }else{
            return view('publicaciones.edit_post', compact('publicacione', 'emprendimientos', 'multimedia'));
        }
    }



    public function update(Request $request, Publicacione $publicacione){

        $multimedias = Multimedia::all();
        foreach($multimedias as $multimedia){
            if($multimedia->publicacion_id == $publicacione->id){
                $multimedia['url_contenido'] = time() . '_' . $request->file(key: 'url_contenido')->getClientOriginalName();
                $request->file(key: 'url_contenido')->storeAs(path:'multimedia_folder', name: $multimedia['url_contenido']);
  
                $multimedia->save();
            }
        }
        $publicacione->descripcion = $request->descripcion;
        $publicacione->save();


        $publicaciones =Publicacione::all();
        $multimedias =Multimedia::all();

        if (auth()->user()->tipopersona_id == '2'){
        return  redirect(route('publicaciones.index'));
        }else{
            return redirect(route('home'));
        }

    }


    // public function multimedia(Multimedia $multimedia, Publicacione $publicacione){

        
    //             $multimedia->publicacion_id = $publicacione->id;
    //             $multimedia->save();
    //             if (auth()->user()->tipopersona_id == '2'){
    //                 return redirect()->route('publicaciones.index');
    //             }else{
    //                 return redirect()->route('home');
    //             }
       
        
    // }


    public function destroy(Publicacione $publicacione ){
        
        $multimedias = Multimedia::all();
        foreach($multimedias as $multimedia){
            if($multimedia->multimediaable_id == $publicacione->id){
                $multimedia->delete();
            }
        }

        $publicacione->delete();
        

        if (auth()->user()->tipopersona_id == '2'){
            
        return redirect()->route('publicaciones.index');
        }else{
            return redirect()->route('home');
        }
    }


   
    
}
