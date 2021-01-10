@extends('admin.layouts.dashboard')

@section('title')
Lista de Evaluadores
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Lista de Evaluadores disponibles</h3>
              <div class="card-tools">
               <div class="btn-group">
                <a href="{{ route('evaluators.create') }}" class="btn btn-success">Agregar Evaluador</a>
               </div>
              </div>
            </div>
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>Id</th>
                      <th>Nombres</th>
                      <th>Apellidos</th>
                      <th>Dirección</th>
                      <th>Extension</th>
                      <th>Editar</th>
                      <th>Borrar</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($evaluators as $eva)
                        <tr>
                            <td>{{ $eva->id }}</td>
                            <td>{{ $eva->name_evaluators }}</td>
                            <td>{{ $eva->lastname_evaluators }}</td>
                            <td>{{ $eva->address }}</td>
                            <td>{{ $eva->extension }}</td>
                            <td>Posponer</td>
                            <td>Cancelar</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>Id</th>
                      <th>Nombres</th>
                      <th>Apellidos</th>
                      <th>Dirección</th>
                      <th>Extension</th>
                      <th>Editar</th>
                      <th>Borrar</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection
