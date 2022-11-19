@extends('layouts.plantilla')

@section('title' , 'Foto de perfil')

@section('content')

<head>
    <link rel="stylesheet" href="{{ asset('css/subirfoto.css') }}">
</head>

<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">
    <center>
    <h1 class="text-3xl text-center font-bold">Foto de perfil</h1>

    <br>

    <form action="{{route('subir.foto', $user)}}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('put')
        
            {{-- <input type="file" class="" name="foto_perfil" value="{{old('foto_perfil')}}"> --}}
            <div class="container-input">
                <input type="file" name="foto_perfil" id="file-5" class="hidden inputfile inputfile-5"  data-multiple-caption="{count} archivos seleccionados" multiple />
                <label for="file-5">
                    <figure>
                        <img class="rounded-circle" id="imgSeleccionada" width="60px" height="60px">
                    </figure>
                    <span class="iborrainputfile">Seleccionar archivo</span>
                </label>
            </div>
      
        <br>

        <br>
        <button class="btn" style="background-color: rgb(255, 174, 0) " type="submit">Subir</button>
        <br>
        <br>
        <a style="color:black" href="{{route('home')}}"><b>cancelar</b></a>
    </form>
    </center>
</div>



<script>
    ;( function ( document, window, index )
    {
        var inputs = document.querySelectorAll( '.inputfile' );
        Array.prototype.forEach.call( inputs, function( input )
        {
            var label	 = input.nextElementSibling,
                labelVal = label.innerHTML;

            input.addEventListener( 'change', function( e )
            {
                var fileName = '';
                if( this.files && this.files.length > 1 )
                    fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
                else
                    fileName = e.target.value.split( '\\' ).pop();

                if( fileName )
                    label.querySelector( 'span' ).innerHTML = fileName;
                else
                    label.innerHTML = labelVal;
            });
        });
    }( document, window, 0 ));
</script>



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

    $("#file-5").change(function () {
        // Código a ejecutar cuando se detecta un cambio de archivO
        readImage(this);
    });
</script>

@endsection