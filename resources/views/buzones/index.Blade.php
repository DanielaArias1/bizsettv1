@extends('layouts.dashboard')

@section('title', 'Buzón')

@section('content')



   <br>
   <form action="{{route('buzons.create')}}">
      <button type="submit" class="btn bg-black border-black btn-outline-info" >Crear</button>
   </form>
   <br>
   <br>

<div class="container-fluid" >

   <div class="scrollmenu" style="border-radius: 10px; height:50ch">
     
   <table id="idbuzons" class="table table-dark table-hover" >

      <thead>
      
         <th>Id</th>
         <th>Mensaje</th>
         <th>Usuario</th>
         <th>Acciones</th>

      </thead>

      <tbody>
         @foreach ($buzons as $buzon)
         <tr>
            <td>{{$buzon->id}}</td>
            <td>{{$buzon->mensaje}}</td>
            <td>{{$buzon->user->nombre}}</td>

            <td>
               <div class="btn-group">
                  <form action="{{route('buzons.edit', $buzon)}}">
                     <button type="submit" class="btn bg-black border-black btn-outline-warning mx-1">Editar</button>
                  </form>
                  <form action="{{route('buzons.destroy', $buzon)}}" method="post">
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
               <td class="pagination-dark" colspan="4">{{$buzons->links()}}</td>
            </ul>
         </nav>
      </tfoot>
   </table>
   </div>
</div>

@endsection