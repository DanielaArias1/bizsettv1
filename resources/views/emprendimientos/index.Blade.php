@extends('layouts.dashboard')

@section('title', 'Emprendimientos')

@section('content')


   <br>
      <form action="{{route('emprendimientos.create')}}">
            <button type="submit" class="btn bg-black border-black btn-outline-info" >Crear</button>
      </form>
   <br>
    <br>

<div class="container-fluid" >

   <div class="scrollmenu" style="border-radius: 10px; height:50ch">

   <table id="idemprendimientos" class="table table-dark table-hover" >

     <thead>
      
         <th>Id</th>
         <th>Nombre</th>
         <th>Descripción</th>
         <th>Clasificación</th>
         <th>usuario</th>
         <th>Acciones</th>

      </thead>

      <tbody>
         @foreach ($emprendimientos as $emprendimiento)
            <tr>
               <td>{{$emprendimiento->id}}</td>
               <td>{{$emprendimiento->nombre_emprendimiento}}</td>
               <td>{{$emprendimiento->descripcion}}</td>
               <td>{{$emprendimiento->clasificacion}}</td>
               <td>{{$emprendimiento->user->nombre}}</td>

               <td>
                  <div class="btn-group">
                     <form action="{{route('emprendimientos.edit', $emprendimiento)}}">
                        <button type="submit" class="btn bg-black border-black btn-outline-warning mx-1">Editar</button>
                     </form>
                     <form action="{{route('emprendimientos.destroy', $emprendimiento)}}" method="post">
                        @csrf
                        @method('delete')
                           <button type="submit" class="btn bg-black border-black btn-outline-danger" >Eliminar</button>
                     </form>
                  </div>
               </td>
            </tr>
         @endforeach
      </tbody>
      <tfoot>
         <nav aria-label="Page navigation example">
            <ul class="pagination">
               <td class="pagination-dark" colspan="4">{{$emprendimientos->links()}}</td>
            </ul>
         </nav>
      </tfoot>
   </table>
   </div>
</div>

@endsection