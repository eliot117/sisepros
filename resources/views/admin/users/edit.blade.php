@extends('admin.layouts.dashboard')

@section('title')
Editar Usuario
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"></h3>
              <div class="card-tools">
               <div class="btn-group">
               </div>
              </div>
            </div>
            <form class="form-horizontal" method="POST" action="{{ route('users.update',$users->id)}}">
                @csrf
                @method('PUT')
                  <div class="card-body">
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Nombres:</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="name" placeholder="Ingrese sus nombres" value="{{ $users->name }}" required autocomplete="name">
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
                        <input type="text" class="form-control" name="lastname" placeholder="Ingrese sus apellidos" value="{{ $users->lastname }}" required autocomplete="name">
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
                        <input type="email" class="form-control" name="email" placeholder="Ingrese un correo electronico" value="{{ $users->email }}" required autocomplete="email">
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
                        <select name="rol" class="form-control form-control-line">
                            <option selected disabled>Elige un rol para este usuario</option>
                            @foreach($roles as $role)
                                @if ($role->name == str_replace(array('["', '"]'), '', $users->tieneRol()))
                                    <option value="{{ $role->id }}" selected>{{ $role->name }}</option>
                                @else
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endif
                            @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="password" class="col-sm-2 col-form-label">Contraseña: <span class="small">(Opcional)</span> </label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" name="password" placeholder="Ingrese una contraseña">
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Confirmar Contraseña: <span class="small">(Opcional)</span></label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirme contraseña">
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
