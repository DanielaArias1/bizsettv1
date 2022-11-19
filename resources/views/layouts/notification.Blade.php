  <?php
    $cont = 0;
    $Tcont = 0;
    $user = Auth::user();
  
    foreach($user->notificaciones as $notificacione){
          $Tcont=$Tcont+1;
      if ($notificacione->reading == 'false') {
          $cont=$cont+1;
      }   
    }
    $cont;
    $Tcont;
  ?>

      {{-- Bell de notificaciones (Dropdown)--}}
<li class="mx-1 my-4">
    <a class="font-bold rounded-md" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      @if ($cont > 0)
        <span class="position-absolute top-4 start-100 translate-middle badge rounded-pill" style="background-color: #F9AE00">
            {{$cont}}
        </span>
      @endif
        <img src="{{asset('storage\img\bxs-bell.svg')}}" alt="bell" style="width: 20px; height: 20px; color:#f9ae00">
    </a>
    {{-- Todo el contenido dentro del dropdown--}}
    <div id="divs" class="dropdown-menu text-center" aria-labelledby="navbarDropdown" style="background-color:rgba(71, 71, 71, 0.705); left: 78%; border-radius: 15px; width: 280px;" >
      @if ($Tcont <= 0)
        <p>No tienes notificaciones</p>
      @endif
        {{-- Notification card --}}
        @foreach($user->notificaciones as $notificacione)
          <a href="{{route('read', $notificacione)}}">
            <div class="noti mx-2">
              <div class="row">
                  <div class="col-3 p-0">
                    <img class="rounded-circle" src="{{asset('storage\img\undraw_avatar.svg')}}" style="width: 50px; height: 50px; ">
                  </div>
                  
                  <div class="col-8">
                      <div>
                          <p class="h6">{{$notificacione->tiponotificacione->texto_notificacion}}</p>
                      </div> 
                      <div>
                        <p class="h6"> <small>{{$notificacione->tiponotificacione->created_at}}</small> </p>
                      </div>
                  </div>
              </div>
                {{-- <div class="circulo"></div> --}}
            </div>
          </a>  
          <div class="dropdown-divider"></div>
        @endforeach
          
    </div>
</li>