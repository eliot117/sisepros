@extends('admin.layouts.dashboard')

@section('title')
Agendar Cita
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
          <div class="card">
            <form class="form-horizontal" method="POST" action="{{ route('quotes.store')}}">
                @csrf
                  <div class="card-body">
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Nombre del Evaluado</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="name_evaluado" placeholder="Ingrese su nombre" value="{{ old('name_evaluado') }}" required autocomplete="name_evaluado" autofocus>
                        </div>
                        @error('name_evaluado')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group row">
                      <label for="lastname_evaluado" class="col-sm-2 col-form-label">Apellido del Evaluado:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="lastname_evaluado" placeholder="Ingrese su apellido" value="{{ old('lastname_evaluado') }}" required autocomplete="lastname_evaluado" autofocus>
                      </div>
                      @error('lastname_evaluado')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                    <div class="form-group row">
                      <label for="correo_evaluado" class="col-sm-2 col-form-label">Correo del Evaluado:</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" name="correo_evaluado" placeholder="Ingrese un correo electronico" value="{{ old('correo_evaluado') }}" required autocomplete="correo_evaluado">
                      </div>
                      @error('correo_evaluado')
                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-success">Guardar</button>
                    <a class="btn btn-warning" href="{{ route('quotes.index') }}">Cancelar</a>
                  </div>
                  <!-- /.card-footer -->
            </form>
          </div>
        </div>
      </div>
</div>
@endsection
