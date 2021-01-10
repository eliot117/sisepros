@extends('admin.layouts.dashboard')

@section('title')
Listas de Citas
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Lista de Citas Registradas</h3>
              <div class="card-tools">
               <div class="btn-group">
                <a href="{{ route('quotes.create') }}" class="btn btn-success">Agregar Cita</a>
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
                      <th>Correo</th>
                      <th>Fecha_Exam_Map</th>
                      <th>Editar</th>
                      <th>Borrar</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($quotes as $quote)
                        <td>{{ $$quote->id }}</td>
                        <td>{{ $quote->name_evaluado }}</td>
                        <td>{{ $quote->lastname_evaluado }}</td>
                        <td>{{ $quote->correo_evaluado }}</td>
                        <td>{{ $quote->date_exam_map }}</td>
                        <td>Editar</td>
                        <td>Borrar</td>
                        @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>Id</th>
                      <th>Nombres</th>
                      <th>Apellidos</th>
                      <th>Correo</th>
                      <th>Fecha_Exam_Map</th>
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
