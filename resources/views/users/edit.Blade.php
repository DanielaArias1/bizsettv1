@extends('layouts.plantilla')

@section('title', 'Usuarios')

@section('content')

<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg" style="width:900px">
    <h1 class="text-3xl text-center font-bold">Editar datos del usuario</h1>


    <strong>Usuario: {{$user->nombre}}</strong>
    <br>
    <br>
    <center>
    <form action="{{route('users.update', $user)}}" method="post">

        @csrf
        @method('put')

        <div class="row">

            <div class="col-1"></div>
        
            <div class="col-5">
                
                {{-- Nombre --}}
        
                    <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg 
                    placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Nombre" name="nombre" value="{{old('nombre', $user->nombre)}}">
        
        
                @error('nombre')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
        
                <br>
        
                {{-- Apellidos --}}
                    <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg 
                    placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Apellidos" name="apellidos" value="{{old('apellidos', $user->apellidos)}}">
        
        
                <br>
        
                @error('apellidos')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
        
                {{-- número de documento --}}

                <label for="">
                    <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg 
                    placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Número de documento" name="numero_documento" value="{{old('numero_documento', $user->numero_documento)}}" >
                </label>

                {{-- Tipo de documento --}}

                <label for="">
                    <select name="tipodocumento_id" id="idtipodocumento" class="form-select form-select-sm my-2 mx-2" aria-label=".form-select-sm example">
                        @foreach ($tipodocumentos as $tipodocumento)
                            <option value="{{$tipodocumento->id}}">{{$tipodocumento->nombre}}</option>
                        @endforeach
                    </select>
                </label>
        
                @error('numerodocumento')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                
                {{-- Dirección --}}
        
                    <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg 
                    placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Dirección" name="direccion" value="{{old('direccion', $user->direccion)}}">
        
        
                @error('direccion')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
        
                <br>

                {{-- Ciudad --}}
        
                <label for="">
                    Ciudad:
                    <select name="ciudade_id" id="idciudad" class="form-select my-2" aria-label="Default select example">
                        @foreach ($ciudades as $ciudade)
                            <option value="{{$ciudade->id}}">{{$ciudade->nombre_ciudad}}</option>
                        @endforeach
                            
                    </select>
                </label>
                
                {{-- Género --}}
            
                <label for="">
                    Género:
                    <select name="genero_id" id="idgenero" class="form-select my-2" aria-label="Default select example">
                        @foreach ($generos as $genero)
                            <option value="{{$genero->id}}">{{$genero->nombre_genero}}</option>
                        @endforeach
                             <br>
                    </select>
                </label>
        
            </div>
        
            <div class="col-1"></div>
        
            <div class="col-5">

                    {{-- Teléfono --}}
        
                    <input type="tel" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg 
                    placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Teléfono" name="telefono" value="{{old('telefono', $user->telefono)}}">
        
                <br>
        
                @error('telefono')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
        
                {{-- Correo electrónico --}}
        
                <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg 
                placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Correo" name="email" value="{{old('email', $user->email)}}">
                
        
                <br>
        
                @error('email')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
        
        
                <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg 
                placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Contraseña" name="password" value="{{old('passsword')}}">
        
        
                <br>
        
                @error('password')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
        
        
        
                <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg 
                placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Confirmar contraseña" name="password_confirmation" value="{{old('passsword')}}">
        
        
                <br>
        
                <label for=""> 
                    <select name="tipopersona_id" id="idtipopersona" class="form-select my-2" aria-label="Default select example">
                        @foreach ($tipopersonas as $tipopersona)
                            <option value="{{$tipopersona->id}}">{{$tipopersona->nombre}}</option>
                        @endforeach
                    </select>
                </label>
        
            </div>
        </div>
        <br>
        <button class="btn" style ="background-color:rgb(255, 174, 0) "  type="submit">Actualizar</button>
        <br>
        <a style="color:black" href="{{route('users.index', $user)}}"><b>cancelar</b></a>

    </form> 
    </center>

</div>

@endsection
