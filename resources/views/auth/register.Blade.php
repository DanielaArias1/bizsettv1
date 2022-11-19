@extends('layouts.plantilla')

@section('title', 'Register')

@section('content')

<br><br>

<div class="container">
    <div class="row">

        <div class="block mx-auto my-12 p-8 w-1/3 shadow-lg col-8" style="border-radius: 15px; background-color:rgba(124, 124, 124, 0.705) ;">

            <h1 class="text-5xl text-center pt-18">Registro</h1>
    
            <form action="" class="mt-5" method="POST">
            @csrf


                <div class="row">

                    <div class="col-5 ">

                    <input type="text" class="border border-gray bg-gray-200 w-full text-lg 
                    placeholder-gray-900 p-2 my-2 " placeholder="Nombre" name="nombre" value="{{old('nombre')}}" style="border-radius: 15px; background-color:rgb(224, 224, 224) ;">


                    @error('nombre')
                        <br>
                        <small>*{{$message}}</small>
                        <br>
                    @enderror

                    <br>


                    <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg 
                    placeholder-gray-900 p-2 my-2 " placeholder="Apellidos" name="apellidos" value="{{old('apellidos')}}" style="border-radius: 15px; background-color:rgb(224, 224, 224) ;">


                    <br>

                    @error('apellidos')
                        <br>
                        <small>*{{$message}}</small>
                        <br>
                    @enderror

                
                    <label for="">
                        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg 
                        placeholder-gray-900 p-2 my-2 " placeholder="Número de documento" name="numero_documento" value="{{old('numero_documento')}}" style="border-radius: 15px; background-color:rgb(224, 224, 224) ;">
                    </label>

                    <label for="">
                        <select name="tipodocumento_id" id="idtipodocumento" class="form-select form-select-sm my-2 mx-2" aria-label=".form-select-sm example" style="border-radius: 15px; background-color:rgba(224, 224, 224, 0) ;">
                            @foreach ($tipodocumentos as $tipodocumento)
                                <option value="{{$tipodocumento->id}}" >{{$tipodocumento->nombre}}</option>
                            @endforeach
                        </select>
                    </label>

                    @error('numero_documento')
                        <br>
                        <small>*{{$message}}</small>
                        <br>
                    @enderror


                    <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg 
                    placeholder-gray-900 p-2 my-2 " placeholder="Dirección" name="direccion" value="{{old('direccion')}}" style="border-radius: 15px; background-color:rgb(224, 224, 224) ;">


                    @error('direccion')
                        <br>
                        <small>*{{$message}}</small>
                        <br>
                    @enderror

                    <br>

                    <div class="row">
                        <div class="col-5">
                            <label for="">
                                <strong>Ciudad</strong> 
                                <select name="ciudad_id" id="idciudad" class="form-select my-2" aria-label="Default select example" style="border-radius: 15px; background-color:rgba(224, 224, 224, 0) ;">
                                    @foreach ($ciudades as $ciudade)
                                        <option value="{{$ciudade->id}}">{{$ciudade->nombre_ciudad}}</option>
                                    @endforeach
                                </select>
                            </label>
        
                            @error('ciudad')
                                <br>
                                <small>*{{$message}}</small>
                                <br>
                            @enderror

                        </div>
                        <div class="col-5">
                            <label for="">
                                <strong>Género</strong> 
                                <select name="genero_id" id="idgenero" class="form-select my-2" aria-label="Default select example" style="border-radius: 15px; background-color:rgba(224, 224, 224, 0) ;">
                                    @foreach ($generos as $genero)
                                        <option value="{{$genero->id}}">{{$genero->nombre_genero}}</option>
                                    @endforeach
                                </select>
                            </label>
        
                            @error('genero')
                                <br>
                                <small>*{{$message}}</small>
                                <br>
                            @enderror

                        </div>

                    </div>


                </div>

                <div class="col-1"></div>

                <div class="col-5 ">

                    <input type="tel" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg 
                    placeholder-gray-900 p-2 my-2 " placeholder="Teléfono" name="telefono" value="{{old('telefono')}}" style="border-radius: 15px; background-color:rgb(224, 224, 224) ;">

                    <br>

                    @error('telefono')
                        <br>
                        <small>*{{$message}}</small>
                        <br>
                    @enderror



                    <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg 
                    placeholder-gray-900 p-2 my-2 " placeholder="Correo" name="email" value="{{old('email')}}" style="border-radius: 15px; background-color:rgb(224, 224, 224) ;">
                    

                    <br>

                    @error('email')
                        <br>
                        <small>*{{$message}}</small>
                        <br>
                    @enderror


                    <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg 
                    placeholder-gray-900 p-2 my-2 " placeholder="Contraseña" name="password" value="{{old('passsword')}}" style="border-radius: 15px; background-color:rgb(224, 224, 224) ;">


                    <br>

                    @error('password')
                        <br>
                        <small>*{{$message}}</small>
                        <br>
                    @enderror



                    <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg 
                    placeholder-gray-900 p-2 my-2" placeholder="Confirmar contraseña" name="password_confirmation" value="{{old('passsword')}}" style="border-radius: 15px; background-color:rgb(224, 224, 224) ;">


                    <br>

                

                    </div>
                </div>

                {{-- botón de registrarse --}}

                <div class="d-flex justify-content-end mx-20">
                    <button type="submit" class="rounded-md bg-warning text-lg font-semibold p-2 my-3 hover:bg-black">Registrarse</button>
                </div>
            </form>

        </div>

    </div>

</div>

<br><br><br>

@endsection

