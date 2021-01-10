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
                            <td>
                                <a href="{{ route('evaluators.edit', $eva->id) }}">
                                <button class="btn btn-primary btn-sm">
                                    <i class="fa fa-edit"></i>
                                </button>
                                </a>
                            </td>
                            <td>
                                <a href="#"  data-toggle="modal" data-target="#deleteModal" data-evaid="{{ $eva->id }}">
                                <button class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                                </a>
                            </td>
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

<!-- delete Modal-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">¿Seguro que quieres eliminar este evaluador?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        </div>
        <div class="modal-body">Seleccione "Eliminar".<br>
            Nota: Una vez pulsando el boton rojo de eliminar no hay vuelta atras.</div>
        <div class="modal-footer">
        <button class="btn btn-primary" type="button" data-dismiss="modal">Cancelar</button>
        @if(empty($eva))
            unset($eva);
        @else
        <form method="POST" action="{{ route('evaluators.destroy', $eva->id) }}">
            @method('DELETE')
            @csrf
            <input type="hidden" id="eva_id" name="eva_id" value="">
            <a style="color: white;" class="btn btn-danger" onclick="$(this).closest('form').submit();">Eliminar</a>
        </form>
        @endif
        </div>
    </div>
  </div>
@endsection
