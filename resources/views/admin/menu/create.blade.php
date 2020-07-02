@extends("theme.$theme.layout")
@section('titulo')
Sistema de Menús
@endsection
@section('scripts')
<script src="{{asset('assets/pages/scripts/admin/menu/crear.js')}}" type="text/javascript"></script>
    
@endsection
@section('contenido')
<div class="row">
    <div class="col-lg-12">
      @include('includes.mensajesErrores')
      @include('includes.mensaje')
      <div class="card border-danger mb-3">
        <div class="card-header">
          <h3 class="card-title">Crear Menús</h3>
        </div>
       
        <div class="card-body border-primary">
          <form action="{{route('guardar_menu')}}" id="form-general" method="POST" autocomplete="off">
              @csrf
              @include('admin.menu.form')
          </form>
        </div>
      </div>
    </div>
</div>

@endsection