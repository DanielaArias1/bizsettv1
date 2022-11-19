
    <a class="nav-link"  href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    
            <img class="rounded-circle" src="{{ 'http://localhost/bizsett/public/storage/fotos_perfiles/' . $user->foto_perfil}}" style="width: 40px; height: 40px;">            
    
    </a>
    {{-- Todo el contenido dentro del dropdown--}}
    <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown" style="background-color:rgba(119, 119, 119, 0.705); left: 78%; border-radius: 15px; width: 300px; " >
    <br>
    {{-- Foto usuario --}}
    <center>
        <a href="{{route('foto.me', $user)}}">
            <img class="rounded-circle" src="{{ 'http://localhost/bizsett/public/storage/fotos_perfiles/' . $user->foto_perfil}}" style="width: 60px; height: 60px; ">
        </a>
    </center>
    {{-- Name usuario --}}
    <p class=" nav-link font-bold">{{$user->nombre}} {{$user->apellidos}}</p>
    
    {{-- redirección a los datos del ususario --}}
        <a class="nav-link font-semibold dropdown-item my-4" href="" data-toggle="modal" data-target="#exampleModal">
        <img class="position-absolute" src="{{asset('storage\img\bxs-data.svg')}}" alt="">
        <h5>Mis datos</h5>
        </a>
    {{-- redirección al emprendimiento del ususario --}}
        
        <a class="nav-link font-semibold dropdown-item my-4" href="{{route('perfilemp.me')}}">
        <img class="position-absolute" src="{{asset('storage\img\bx-store-black.svg')}}" alt="">
        <h5>Mi emprendimiento</h5>
        </a>
    {{-- redirección al chat --}}
        <a class="nav-link font-semibold dropdown-item my-4" href="{{route('chat')}}">
        <img class="position-absolute" src="{{asset('storage\img\bxs-chat.svg')}}" alt="">
        <h5>Mis mensajes</h5>
        </a>
    {{-- redirección al buzón de comentarios --}}
    <a class="nav-link font-semibold dropdown-item my-4" href="{{route('buzons.create')}}">
        <img class="position-absolute" src="{{asset('storage\img\bx-box.svg')}}" alt="">
        <h5>Buzón de comentarios</h5>
    </a>

    {{-- Cerrar sesión (log out) --}}
    <div class="dropdown-divider"></div>
    <a class="font-bold rounded-md btn btn-outline-warning" style="" href="{{route('login.destroy')}}">Cerrar sesión</a>
    </div>