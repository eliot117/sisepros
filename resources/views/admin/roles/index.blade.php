@extends('admin.layouts.dashboard')

@section('title')
Lista de Usuarios Registrados
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Lista de Usuarios Registrados</h3>
            <div class="card-tools">
                <div class="btn-group">
                    <a href="{{ route('roles.create') }}" class="btn btn-success">Crear Rol de Usuario</a>
                </div>
            </div>
        </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Eliminar</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Eliminar</th>
                      </tr>
                    </tfoot>
                    <tbody>
                    @foreach($roles as $role)
                      <tr>
                        <td>{{ $role->id }}</td>
                        <td>{{ $role->name }}</td>
                        <td>
                          <a href="#"  data-toggle="modal" data-target="#deleteModal" data-roleid="{{ $role->id }}"> <i class="fas fa-trash-alt"></i></a>
                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->

  <!-- delete Modal-->
  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">¿Seguro que quieres eliminar este Rol de usuario?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        </div>
        <div class="modal-body">Seleccione "Eliminar".<br>
            Nota: Asegurese de que no sean ninguno de los dos roles principales.</div>
        <div class="modal-footer">
        <button class="btn btn-primary" type="button" data-dismiss="modal">Cancelar</button>
        @if(empty($role))
            unset($role);
        @else
        <form method="POST" action="{{ route('roles.destroy', $role->id) }}">
            @method('DELETE')
            @csrf
            <input type="hidden" id="role_id" name="role_id" value="">
            <a style="color: white;" class="btn btn-danger" onclick="$(this).closest('form').submit();">Eliminar</a>
        </form>
        @endif
        </div>
    </div>
  </div>

@endsection
