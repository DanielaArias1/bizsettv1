@extends('layouts.dashboard')

@section('title', 'Emprendimientos')

@section('content')

<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200
rounded-lg shadow-lg">

    <h1 class="text-3xl text-center font-bold">Emprendimiento: {{$emprendimiento->nombre_emprendimiento}}</h1>

    <br>
    <br>
    <center>
    <form action="{{route('emprendimientos.update', $emprendimiento)}}" method="post">
        @csrf
        @method('put')

        <label >
            Nombre:
            <br>
            <input type="text" class="form-control" name="nombre_emprendimiento" value="{{old('nombre_emprendimiento', $emprendimiento->nombre_emprendimiento)}}">
        </label>
        <br>

        @error('nombre_emprendimiento')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
    

        <label >
            Descripción:
            <br>
            <input type="textarea" class="form-control" name="descripcion" value="{{old('descripcion', $emprendimiento->descripcion)}}">
        </label>
        <br>

        @error('descripcion')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror



        <br>

        <label >
            Clasificación:
            <br>
            <input type="tex" class="form-control" name="clasificacion" value="{{old('clasificacion', $emprendimiento->clasificacion)}}">
        </label>
        <br>

        @error('clasificacion')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror


        <button class="btn" style = "background-color:rgb(255, 174, 0) "  type="submit">Actualizar</button>
        <br>
        <a style="color:black" href="{{route('emprendimientos.index', $emprendimiento)}}"><b>cancelar</b></a>

    </form> 

    <br>
 
    </center>

</div>

@endsection
