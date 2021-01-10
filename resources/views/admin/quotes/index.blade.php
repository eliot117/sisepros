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
                      <th>Status</th>
                      <th>Posponer</th>
                      <th>Cancelar</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($quotes as $quote)
                        <tr>
                            <td>{{ $quote->id }}</td>
                            <td>{{ $quote->name_evaluado }}</td>
                            <td>{{ $quote->lastname_evaluado }}</td>
                            <td>{{ $quote->correo_evaluado }}</td>
                            <td>{{ $quote->eps_exam }}</td>
                            <td>{{ $quote->status_evaluation }}</td>
                            <td>
                                <a href="{{ route('quotes.edit', $quote->id) }}">
                                    <button class="btn btn-primary btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                </a>
                            </td>
                            <td>
                                <a href="#"  data-toggle="modal" data-target="#deleteModal" data-quoteid="{{ $quote->id }}">
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
                      <th>Correo</th>
                      <th>Status</th>
                      <th>Posponer</th>
                      <th>Cancelar</th>
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
        <h5 class="modal-title" id="exampleModalLabel">¿Seguro que quieres eliminar esta cita?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        </div>
        <div class="modal-body">Seleccione "Eliminar".<br>
            Nota: Asegurese de verificar cual borrar.</div>
        <div class="modal-footer">
        <button class="btn btn-primary" type="button" data-dismiss="modal">Cancelar</button>
        @if(empty($quote))
            unset($quote);
        @else
        <form method="POST" action="{{ route('quotes.destroy', $quote->id) }}">
            @method('DELETE')
            @csrf
            <input type="hidden" id="quote_id" name="quote_id" value="">
            <a style="color: white;" class="btn btn-danger" onclick="$(this).closest('form').submit();">Eliminar</a>
        </form>
        @endif
        </div>
    </div>
  </div>
@endsection
