@extends('admin.layouts.dashboard')

@section('title')
Agregar Evaluador
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
                <form class="form-horizontal" method="POST" action="{{ route('evaluators.store')}}">
                    @csrf
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Nombres:</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="name_evaluators" placeholder="Ingrese sus nombres" value="{{ old('name_evaluators') }}" required autocomplete="name_evaluators" autofocus>
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
                            <input type="text" class="form-control" name="lastname_evaluators" placeholder="Ingrese sus apellidos" value="{{ old('lastname_evaluators') }}" required autocomplete="lastname_evaluators" autofocus>
                          </div>
                          @error('lastname_evaluators')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>
                        <div class="form-group row">
                          <label for="address" class="col-sm-2 col-form-label">Dirección:</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" name="address" placeholder="Ingrese una dirección" value="{{ old('address') }}" required autocomplete="address">
                          </div>
                          @error('address')
                            <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-sm-2 col-form-label">Extensión:</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="extension" placeholder="Ingrese una extensión" value="{{ old('extension') }}" required autocomplete="extension">
                            </div>
                            @error('extension')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                        </div>

                      <!-- /.card-body -->
                      <div class="card-footer">
                        <button type="submit" class="btn btn-success">Guardar</button>
                        <a class="btn btn-warning" href="{{ route('evaluators.index') }}">Cancelar</a>
                      </div>
                      <!-- /.card-footer -->
                </form>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection
