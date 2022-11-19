@extends('layouts.plantilla')

@section('title', 'Publicaciones')

@section('content')


<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">
    <center>
    <h1 class="text-3xl text-center font-bold">Publicación</h1>
    <br>

    <form action="{{route('publicaciones.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

        <textarea name="descripcion" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg 
        placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Descripción..." id="descripcion"></textarea>

        <br>
        <br>

        <input type="file" id="image" class="" name="url_contenido" value="{{old('url_contenido')}}">

        <div>
            <img id="imgSeleccionada">
        </div>

        <br>

        <br>

            <div class="d-flex justify-content-between">

                <a style="color:black" href="{{route('home')}}"><b>cancelar</b></a>
                
                <button class="btn" style="background-color: rgb(255, 174, 0) " type="submit">Crear</button>
                
            </div>
        
    </form>
    </center>

</div>


<script>
    function readImage (input) {
        if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#imgSeleccionada').attr('src', e.target.result); // Renderizamos la imagen
        }
        reader.readAsDataURL(input.files[0]);
        }
    }

    $("#image").change(function () {
        // Código a ejecutar cuando se detecta un cambio de archivO
        readImage(this);
    });
</script>

@endsection
