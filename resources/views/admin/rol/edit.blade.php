@extends("theme.$theme.layout")
@section('titulo')
Roles
@endsection
@section('scripts')
<script src="{{asset('assets/pages/scripts/admin/crear.js')}}"></script>
@endsection
@section('contenido')
    <div class="row">
        <div class="col-lg-12">
            @include('includes.mensajesErrores')
            @include('includes.mensaje')
            <div class="card">
                <div class="card-header with-border">
                    <h3 class="card-title">Editar Rol</h3>
                    <div class="card-tools pull-right">
                        <a href="{{route('rol')}}" class="btn btn-block btn-info btn-sm">                           
                            <i class="fa fa-fw fa-reply-all"></i>Volver al listado                           
                        </a>
                    </div>
                </div>
            <form action="{{route('actualizar_rol',['id'=>$data->id])}}" id="form-general" class="form-horizontal" method="post" autocomplete="off">
                @csrf @method('put')
                <div class="card-body">
                    @include('admin.rol.form')
                </div>
                <div class="card-footer">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        @include('includes.boton-form-editar')
                    </div>
                </div>

            </form>
            </div>
        </div>
    </div>
@endsection