@extends('layouts.plantilla')

@section('title', 'Solicitud de empleo')

@section('content')

<head>
    <link rel="stylesheet" href="{{ asset('css/empleo.css')}}">
</head>

 
<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200
rounded-lg shadow-lg">

    <h1 class="text-3xl text-center font-bold">Solicitar puesto de trabajo</h1>

    <center>

    <form action="{{route('empleos.store', $emprendimiento)}}" method="POST" enctype="multipart/form-data">

        @csrf

        <label >
            Asunto:
            <br>
            <input type="textarea" class="form-control" name="mensaje_trabajo" value="{{old('mensaje_trabajo')}}">
        </label>
        <br>

        @error('mensaje_trabajo')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <label >
            <div class="container-input">
                <input type="file" name="evidencia" id="file-6" class="hidden inputfile inputfile-6" data-multiple-caption="{count} archivos seleccionados" multiple />
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
        
            <button class="btn" style="background-color: rgb(255, 174, 0) " type="submit">Enviar</button>
            <br>
            <br>
            <a style="color:black" href="{{route('home')}}"><b>cancelar</b></a>
       
    </form>
    
    </center>

</div>

@endsection

{{-- <script>
    
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
    
</script> --}}
