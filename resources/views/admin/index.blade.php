@extends('admin.layouts.dashboard')

@section('title')
Pagina Principal
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Bienvenido {{ Auth::user()->name }}</h3>
              <div class="card-tools">
               <div class="btn-group">
               </div>
              </div>
            </div>
            <div class="card-body">
            </div>
          </div>
        </div>
      </div>
</div>
@endsection
