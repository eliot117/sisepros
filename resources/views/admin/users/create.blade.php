@extends('admin.layouts.dashboard')

@section('title')
Agregar Usuario
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Ingresar un nuevo usuario</h3>
              <div class="card-tools">
               <div class="btn-group">
               </div>
              </div>
            </div>
            <form class="form-horizontal" method="POST" action="{{ route('users.store')}}">
                @csrf
                  <div class="card-body">
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Nombres:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="name" placeholder="Ingrese sus nombres" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombres">
                        </div>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                      <label for="name" class="col-sm-2 col-form-label">Apellidos:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="lastname" placeholder="Ingrese sus apellidos" value="{{ old('lastname') }}" required autocomplete="name" autofocus placeholder="Nombres">
                      </div>
                      @error('lastname')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                    <div class="form-group row">
                      <label for="email" class="col-sm-2 col-form-label">Correo Electronico:</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" placeholder="Ingrese un correo electronico" value="{{ old('email') }}" required autocomplete="email" placeholder="Correo Electrónico">
                      </div>
                      @error('email')
                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-2">
                        <span><b>Asignar un Rol</b></span>
                      </div>
                      <div class="col-sm-10">
                        <select name="rol" class="form-control">
                          <option selected disabled>Elige un rol para este usuario</option>
                          @foreach($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="password" class="col-sm-2 col-form-label">Contraseña:</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" name="password" placeholder="Ingrese una contraseña" value="{{ old('password') }}">
                      </div>
                      @error('password')
                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Repite Contraseña</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"  required autocomplete="new-password" placeholder="Confirme contraseña">
                        </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-success">Guardar</button>
                    <a class="btn btn-warning" href="{{ route('users.index') }}">Cancelar</a>
                  </div>
                  <!-- /.card-footer -->
            </form>
          </div>
        </div>
      </div>
</div>
@endsection
