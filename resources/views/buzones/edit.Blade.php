@extends('layouts.dashboard')

@section('title', 'Buzon')

@section('content')
<div class="container-fluid">
    <div class="row">

        <div class="col-6" style="background; width: 30rem; height: 30rem;">
            <img src="http://localhost/bizsett/public/storage/img/undraw_mailbox_.svg" alt="">
        </div>
    
        <div class="col-5 block border border-secondary rounded-lg shadow-lg" style="background-color: rgb(172, 172, 172)">
            <center>
            <form action="{{route('buzons.update', $buzon)}}" method="post">

            @csrf
            @method('put')
            <br>

            <p class="h1">¡Ayudanos a ayudarte!</p>

            <br>
            <strong>Buzon de: {{$buzon->user->nombre}}</strong>
            <br>

            <textarea name="mensaje" class="form-control" style="height: 100px" placeholder="Deja una sujerencia o queja aquí" id="floatingTextarea">{{old('mensaje', $buzon->mensaje)}}</textarea>

            @error('mensaje')
                <br>
                <small>*{{$message}}</small>
                <br>
            @enderror

            <br>

            @if (auth()->user()->tipopersona_id == '2')
                <label >
                    <br>
                    <select name="user_id" id="iduser" class="form-select border border-gray-200
                    rounded-lg" aria-label="Default select example">
                        <option selected>Usuario</option>
                        @foreach ($users as $user)
                            
                            <option value="{{$user->id}}">{{$user->nombre}}</option>
                        @endforeach
                    </select>
                </label>
                
                <br>
                <br>

                <button class="btn" style = "background-color:rgb(255, 174, 0) "  type="submit">Actualizar</button>
                <br>
                <a style="color:black" href="{{route('buzons.index', $buzon)}}"><b>cancelar</b></a>
                
            @else

                <br>
                <br>
                <button class="btn" style="background-color: rgb(255, 174, 0) " type="submit">Enviar</button>
                <br>
                <br>
                <a style="color:black" href="{{route('home')}}"><b>cancelar</b></a>

            @endif
            </form>
            </center>
        </div>
    

        <div class="col-1"></div>

    </div>
</div>




   


   

</form> 

<br>
 

</center>

</div>

@endsection
