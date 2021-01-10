@extends('admin.layouts.dashboard')

@section('title')
Crear Rol
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('roles.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nombre del Rol</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Ingrese nombre del rol " value="{{ old('name') }}">
                    </div>
                    <div class="form-group pt-2">
                        <input class="btn btn-success" type="submit" value="Guardar">
                        <a href="{{ route('roles.index') }}" class="btn btn-danger">Regresar</a>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection
