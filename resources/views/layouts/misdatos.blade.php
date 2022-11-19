<!-- Modal -->

@auth
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
      <div class="modal-header">

      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      
    
              <div class="card" style="background-color: rgb(255, 255, 255)">
                <div class="card-body pt-3">
                  <!-- Bordered Tabs -->
                  <ul class="nav nav-tabs nav-tabs-bordered">
    
                    <li class="nav-item">
                      <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Mis datos</button>
                    </li>
    
                    <li class="nav-item">
                      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Editar perfil</button>
                    </li>
    
    
                  </ul>
                  <div class="tab-content pt-2" >
    
                    <div class="tab-pane fade show active profile-overview" id="profile-overview">
                      
                        
                            <div class="row mb-3">
                              <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Foto de perfil </label>
                              <div class="d-flex justify-content-evenly">
            
                                    <a href="{{route('foto.me', $user)}}">
                                        <img class="rounded-circle" src="{{ 'http://localhost/bizsett/public/storage/fotos_perfiles/' . $user->foto_perfil}}" style="width: 90px; height: 90px;">
                                    </a>
                        
                            </div>
                            </div>
                      
                      <h5 class="card-title">Perfil</h5>
    
                      <table class="table table-striped">
      
                        <tbody>
                          <tr>
                            <th scope="row">Nombre</th>
                            <td>{{$user->nombre}}</td>
                          </tr>
                          <tr>
                            <th scope="row">Apellidos</th>
                            <td>{{$user->apellidos}}</td>
                          </tr>
                          <tr>
                            <th scope="row">Correo</th>
                            <td>{{$user->email}}</td>
                          </tr>
                          <tr>
                              <th scope="row">Contraseña</th>
                              <td>*************</td>
                            </tr>
                            <tr>
                              <th scope="row">Telefono</th>
                              <td>{{$user->telefono}}</td>
                            </tr>
                            <tr>
                              <th scope="row">Dirección</th>
                              <td>{{$user->direccion}}</td>
                            </tr>
                        </tbody>
                      </table>
    
                    </div>

                    <!--Editar Perfil-->
    
                    <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
    
                      <!-- Editar Perfil -->
                      <form action="{{route('users.actualizar', $user)}}" method="post">
                        @csrf
                        @method('put')

                        <div class="row mb-3">
                          <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Foto de perfil </label>
                          <div class="d-flex justify-content-evenly">
        
                                <a href="{{route('foto.me', $user)}}">
                                    <img class="rounded-circle" src="{{ 'http://localhost/bizsett/public/storage/fotos_perfiles/' . $user->foto_perfil}}" style="width: 90px; height: 90px;">
                                </a>
                        
                        </div>
                        </div>
                        
    
                        <div class="row mb-3" >
                          <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nombre</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="nombre" type="text" class="form-control" id="fullName" value="{{$user->nombre}}">
                          </div>
                        </div>
    
                        <div class="row mb-3" >
                          <label for="about" class="col-md-4 col-lg-3 col-form-label" style="background-color: hsla(208, 100%, 97%, 0)">Apellidos</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="apellidos" type="text" class="form-control" id="about" value="{{$user->apellidos}}">
                          </div>
                        </div>
    
                        <div class="row mb-3">
                          <label for="company" class="col-md-4 col-lg-3 col-form-label">Correo</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="email" type="email" class="form-control" id="about" value="{{$user->email}}">
                          </div>
                        </div>
    
                        <div class="row mb-3">
                          <label for="Job" class="col-md-4 col-lg-3 col-form-label">Contraseña</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="password" type="password" class="form-control" id="Job" value="{{$user->password}}">
                          </div>
                        </div>
    
                        <div class="row mb-3">
                          <label for="Country" class="col-md-4 col-lg-3 col-form-label">Telefono</label>
                          <div class="col-md-8 col-lg-9">
                            <input name="telefono" type="text" class="form-control" id="Country" value="{{$user->telefono}}">
                          </div>
                        </div>
    
                        <div class="row mb-3">
                          <label for="Address" class="col-md-4 col-lg-3 col-form-label">Dirección </label>
                          <div class="col-md-8 col-lg-9">
                            <input name="direccion" type="text" class="form-control" id="Address" value="{{$user->direccion}}">
                          </div>
                        </div>
                        
                        <div class="text-center">
                          <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                      </form><!-- End Profile Edit Form -->
                    </div>
                </div>
              </div>
            </div>
          </div>
    
      </main><!-- End #main -->


    </div>
    {{-- <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <button type="button" class="btn btn-primary">Save changes</button>
    </div> --}}
  </div>
</div>
@endauth