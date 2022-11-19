@extends('layouts.dashboard')

@section('title', 'Emprendimientos')

@section('content')

<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200
    rounded-lg shadow-lg">

    <h1 class="text-3xl text-center font-bold">Crea un emprendimiento</h1>

    <center>
    <form action="{{route('emprendimientos.store')}}" method="POST">
    @csrf

        <label >
            Nombre:
            <br>
            <input type="text" class="form-control" name="nombre_emprendimiento" value="{{old('nombre_emprendimiento')}}">
        </label>
        <br>

        <!-- @error('nombre_emprendimiento')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        -->

        <label >
            Descripción:
            <br>
            <input type="textarea" class="form-control" name="descripcion" value="{{old('descripcion')}}">
        </label>
        <br>

        <!-- @error('descripcion')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror-->



        <br>

        <label >
            Clasificación:
            <br>
            <input type="tex" class="form-control" name="clasificacion" value="{{old('clasificacion')}}">
        </label>
        <br>

        <!-- @error('categoria')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror-->

        
    
        <label >
            Usuario:
            <br>

            <select name="user_id" id="iduser" class="form-select" aria-label="Default select example">
                
                @foreach ($users as $user)
                    
                    <option value="{{$user->id}}">{{$user->nombre}}</option>
                @endforeach
                
            </select>
        </label>

        <br>
        <button class="btn" style="background-color: rgb(255, 174, 0) " type="submit">Crear</button>
        <br>
        <br>
        <a style="color:black" href="{{route('emprendimientos.index')}}"><b>cancelar</b></a>
        
        
    </form>
    </center>
    
</div>

@endsection
