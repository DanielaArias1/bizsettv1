@extends('layouts.plantilla')

@section('title', 'Login')

@section('content')

<br><br>

<div class="block mx-auto my-12 p-8 w-1/3 shadow-lg" style="border-radius: 15px; background-color:rgba(124, 124, 124, 0.705) ;">

    <h1 class="text-3xl text-center font-bold">Login</h1>

    <form action="" class="mt-4" method="POST">
    @csrf

        <input type="email" class=" border border-gray-200 rounded-md bg-gray-200 w-full text-lg 
        placeholder-gray-900 p-2 my-2" value="{{old('email')}}" placeholder="Correo" id="email" name="email">

        <input type="password" class=" border border-gray-200 rounded-md bg-gray-200 w-full text-lg 
        placeholder-gray-900 p-2 my-2" placeholder="Contraseña" id="password" name="password">

        @error('message')
        <p class="alert alert-danger">*Correo o contraseña incorrectos</p>
        @enderror

        <button type="submit" class="rounded-md bg-warning w-full text-lg font-semibold p-2 my-3 hover:bg-black">Inciar sesión</button>

        
        <center>
        <a href="">¿Olvidaste tu contraseña?</a>
        </center>
    
    </form>

</div>
<br><br><br>
@endsection

