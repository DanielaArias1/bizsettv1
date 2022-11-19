@extends('layouts.dashboard')

@section('title', 'Solicitudes de empleo')

@section('content')

<head>
    <link rel="stylesheet" href="{{ asset('css/empleo.css')}}">
</head>

<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200
rounded-lg shadow-lg">

    <h1 class="text-3xl text-center font-bold">Editar datos del buzon</h1>

    <strong>Enviado a: {{$empleo->emprendimiento->nombre_emprendimiento}}</strong>
    <br>
    <br>
    <center>
    <form action="{{route('empleos.update', $empleo)}}" method="post" enctype="multipart/form-data">

        @csrf
        @method('put')

        <label >
            Asunto:
            <br>
            <input type="textarea" class="form-control" name="mensaje_trabajo" value="{{old('mensaje_trabajo', $empleo->mensaje_trabajo)}}">
        </label>
        <br>

        @error('mensaje_trabajo')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <label >
            <div class="container-input">
                <input type="file" name="evidencia" id="file-6" class="hidden inputfile inputfile-6" value="{{old('evidencia', $empleo->evidencia)}}" data-multiple-caption="{count} archivos seleccionados" multiple />
                <label for="file-6">
                    <figure>
                        <svg xmlns="http://www.w3.org/2000/svg" class="iborrainputfile" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg>
                    </figure>
                    <span class="iborrainputfile">Seleccionar archivo</span>
                </label>
            </div>
        </label>
        <br>
        

        @error('evidencia')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
    

        @if (auth()->user()->tipopersona_id == '2')
            <label >
                Usuario:
                <select name="user_id" id="iduser" class="form-select" aria-label="Default select example">
                    
                    @foreach ($users as $user)
                        <option value="{{$user->id}}">{{$user->nombre}}</option>
                    @endforeach
                    
                </select>
            </label>

            <label >
                <br>
                Emprendimiento:
                <select name="emprendimiento_id" id="idemprendimiento" class="form-select" aria-label="Default select example">
                   
                    @foreach ($emprendimientos as $emprendimiento)
                        <option value="{{$emprendimiento->id}}">{{$emprendimiento->nombre_emprendimiento}}</option>
                    @endforeach
                    
                </select>
            </label>

            <br>
            <br>

            <button class="btn" style="background-color: rgb(255, 174, 0) " type="submit">Enviar</button>
            
            <br>
            <br>
            <a style="color:black" href="{{route('empleos.index')}}"><b>cancelar</b></a>

        @else
            <button class="btn" style="background-color: rgb(255, 174, 0) " type="submit">Enviar</button>
            <br>
            <br>
            <a style="color:black" href="{{route('home')}}"><b>cancelar</b></a>
        @endif
    </form> 
    <br>
    </center>
</div>
@endsection
