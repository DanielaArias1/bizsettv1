<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
        <link rel="stylesheet" href="{{asset('css/dash.css')}}">

        {{-- Icono sobre el título de la página(pestaña) --}}
        <link rel="shorcut icon" type="image/-icon" href="{{asset('storage\img\logo_Bsztt.png')}}">
        <style>
          div.scrollmenu {
            background-color: #E4E9F7;
            overflow: auto;
            white-space: nowrap;
          }
          
        </style> 

        {{-- <link rel="stylesheet" href="{{ asset('css/Cindex.css') }}">  --}}
        <!-- Boxicons CDN Link -->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
            <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">


        <!-- Tailwind CSS Link -->
        <link rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
    
        <!-- Fontawesome Link -->
        <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
   </head>

<body>
  <div class="sidebar" >
    <div class="logo-details">
        <img class="icon" src="{{asset('storage\img\logo_Bsztt.png')}}" alt="logo_bizsett" height="30px" width="30px">
        <div class="logo_name">Bizsett</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
        <form method="GET">
            <i class='bx bx-search' ></i>
          <input name="search" type="text" placeholder="Search..."><button type="submit"></button>
          <span class="tooltip">Search</span>
        </form>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a href="{{route('users.index')}}">
         <i class='bx bx-user' ></i>
         <span class="links_name">User</span>
       </a>
       <span class="tooltip">User</span>
     </li>
     
     <li>
       <a href="{{route('emprendimientos.index')}}">
        <i class='bx bx-store' ></i>
         <span class="links_name">Emprendimientos</span>
       </a>
       <span class="tooltip">Emprendimientos</span>
     </li>
     <li>
      <a href="{{route('publicaciones.index')}}">
        <i class='bx bx-image'></i>
        <span class="links_name">Publicaciones</span>
      </a>
      <span class="tooltip">Publicaciones</span>
    </li>
     <li>
       <a href="{{route('inversionistas.index')}}">
        <i class='bx bx-dollar-circle' ></i>
         <span class="links_name">Inversiones</span>
       </a>
       <span class="tooltip">Inversiones</span>
     </li>
     <li>
       <a href="{{route('empleos.index')}}">
        <i class='bx bx-file'></i>
         <span class="links_name">Hojas de vida</span>
       </a>
       <span class="tooltip">Hojas de vida</span>
     </li>
     <li>
       <a href="{{route('buzons.index')}}">
        <i class='bx bxs-cabinet'></i>
         <span class="links_name">Buzón PQRS</span>
       </a>
       <span class="tooltip">Buzón PQRS</span>
     </li>
     <li>
      <a href="#">
        <i class='bx bx-chat' ></i>
        <span class="links_name">Messages</span>
      </a>
      <span class="tooltip">Messages</span>
    </li>
     <li>
       <a href="#">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Setting</span>
       </a>
       <span class="tooltip">Setting</span>
     </li>
     <li class="profile">
        <a href="{{route('login.destroy')}}">
          <i class='bx bx-door-open' ></i>
         <span class="links_name">Cerrar Sesión</span>
        </a>
        <span class="tooltip">Cerrar Sesión</span>
     </li>
    </ul>
  </div>

  <section class="home-section">
      

      @yield('content')

  </section>


  <script>
    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");
    let searchBtn = document.querySelector(".bx-search");

    closeBtn.addEventListener("click", ()=>{
        sidebar.classList.toggle("open");
        menuBtnChange();//calling the function(optional)
    });

    searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
        sidebar.classList.toggle("open");
        menuBtnChange(); //calling the function(optional)
    });

    // following are the code to change sidebar button(optional)
    function menuBtnChange() {
    if(sidebar.classList.contains("open")){
        closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
    }else {
        closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
    }
    }
  </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="crossOrigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   

</body>
</html>