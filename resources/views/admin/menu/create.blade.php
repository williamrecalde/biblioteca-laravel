@extends("theme.$theme.layout")
@section('titulo')
Sistema de Menús
@endsection
@section('scripts')
<script src="{{asset('assets/pages/scripts/admin/crear.js')}}" type="text/javascript"></script>
    
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
        <!-- /.card-header -->
        <div class="card-body border-primary">
        <form action="{{route('guardar_menu')}}" id="form-general" method="POST">
                @csrf
                @include('admin.menu.form')
            </form>
        </div>
        <!-- /.card-body -->
        
      </div>
      <!-- /.card -->
    </div>
</div>

<div class="col-md-6">
  <div class="card card-default">
    <div class="card-header">
      <h3 class="card-title">
        <i class="fas fa-exclamation-triangle"></i>
        Alerts
      </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-ban"></i> Alert!</h5>
        Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my
        entire
        soul, like these sweet mornings of spring which I enjoy with my whole heart.
      </div>
      <div class="alert alert-info alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-info"></i> Alert!</h5>
        Info alert preview. This alert is dismissable.
      </div>
      <div class="alert alert-warning alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>
        Warning alert preview. This alert is dismissable.
      </div>
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class="icon fas fa-check"></i> Alert!</h5>
        Success alert preview. This alert is dismissable.
      </div>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.col -->
@endsection