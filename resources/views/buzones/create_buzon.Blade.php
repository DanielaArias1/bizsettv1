@extends('layouts.plantilla')

@section('title', 'Buzon')

@section('content')

<br>
<br>
<div class="container-fluid">
    <div class="row">

        <div class="col-6" style="background; width: 30rem; height: 30rem;">
            <img src="http://localhost/bizsett/public/storage/img/undraw_mailbox_.svg" alt="">
        </div>
    
        <div class="col-5 block border border rounded-lg shadow-lg" style="background-color: rgb(255, 255, 255)">
            <center>
            <form action="{{route('buzons.store')}}" method="POST">
            @csrf
            <br>

            <p class="h1">¡Ayudanos a ayudarte!</p>

            <br>
            <br>

            <textarea name="mensaje" class="form-control" style="height: 100px" placeholder="Deja una sujerencia o queja aquí" id="floatingTextarea"></textarea>

            @error('mensaje')
                <br>
                <small>*{{$message}}</small>
                <br>
            @enderror

            <br>

        
                <br>
                <br>
                <button class="btn" style="background-color: rgb(255, 174, 0) " type="submit">Enviar</button>
                <br>
                <br>
                <a style="color:black" href="{{route('home')}}"><b>cancelar</b></a>

           
            </form>
            </center>
        </div>
    

        <div class="col-1"></div>

    </div>
</div>

<br> 
        
@endsection
