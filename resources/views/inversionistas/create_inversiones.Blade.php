@extends('layouts.plantilla')

@section('title', 'Inversiones')

@section('content')

<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200
    rounded-lg shadow-lg">

        <h1 class="text-3xl text-center font-bold">Enviar Propuesta a {{$emprendimiento->nombre_emprendimiento}}</h1>
    
    <br>
    
    <form action="{{route('inversionistas.store', $emprendimiento)}}" method="POST">
        @csrf
        <center>
            <label for="">
                <textarea name="propuesta" class="form-control" placeholder="Propuesta de inversión" id="floatingTextarea">{{old('propuesta')}}</textarea>
            </label>
            
        
            @error('propuesta')
                <br>
                <small>*{{$message}}</small>
                <br>
            @enderror
        
            <br>
            

            
                <br>
                <button class="btn" style="background-color: rgb(255, 174, 0) " type="submit">Enviar</button>
                <br>
                <br>
                <a style="color:black" href="{{route('home')}}"><b>cancelar</b></a>
            
        </center>
    </form>
</div>

@endsection
