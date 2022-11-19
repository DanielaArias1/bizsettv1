@extends('layouts.dashboard')
{{-- @extends('adminlte::page') --}}
@section('title', 'Usuarios')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

<head>
   {{-- <link rel="stylesheet" href="http://localhost/bizsett/public/css/Cindex.css"> --}}


</head>

   <br>
   
   <form action="{{route('users.create')}}">
      <button type="submit" class="btn bg-black border-black btn-outline-info" >Crear</button>
   </form>
   <br>

<div class="container-fluid">
   <div id="divs" class="scrollmenu" style="border-radius: 10px; height:50ch" >
      <table class="table table-dark table-hover"  id="idusers">
            
         <thead class="">
               <th>Id</th>
               <th>Nombre</th>
               <th>Apellidos</th>
               <th>Telefono</th>
               <th>Tipo de documento</th>
               <th>Número de documento</th>
               <th>Dirección</th>
               <th>Ciudad</th>
               <th>Género</th>
               <th>Tipo persona</th>
               <th>Correo</th>
               <th>Contraseña</th>
               <th>Acciones</th>
         </thead>

         <tbody>
            @foreach ($users as $user)
            <tr>
               <td>{{$user->id}}</td>
               <td>{{$user->nombre}}</td>
               <td>{{$user->apellidos}}</td>
               <td>{{$user->telefono}}</td>
               <td>{{$user->tipodocumento->nombre}}</td>
               <td>{{$user->numero_documento}}</td>
               <td>{{$user->direccion}}</td>
               <td>{{$user->ciudade->nombre_ciudad}}</td>
               <td>{{$user->genero->nombre_genero}}</td>
               <td>{{$user->tipopersona->nombre}}</td>
               <td>{{$user->email}}</td>
               <td>{{$user->password}}</td>   

               <td>
                  <div class="btn-group">
                     <form action="{{route('users.edit', $user)}}">
                        <button type="submit" class="btn bg-black border-black btn-outline-warning mx-1">Editar</button>
                     </form>
                     <form action="{{route('users.destroy', $user)}}" method="post">
                        @csrf
                        @method('delete')
                           <button type="submit" class="btn bg-black border-black btn-outline-danger" >Eliminar</button>
                     </form>
                  </div>
               </td>

            </tr>
            @endforeach
            @if (count($users)<= 0)
                <tr>
                  <td colspan="12">
                     No hay resultados
                  </td>
                </tr>
            @endif
         </tbody>
         <tfoot>
            <nav aria-label="Page navigation example">
               <ul class="pagination">
                  <td class="pagination-dark" colspan="4">{{$users->links()}}</td>
               </ul>
            </nav>
         </tfoot>
      </table>
   </div> 
</div>


@endsection