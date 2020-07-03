@extends("theme.$theme.layout")
@section('titulo')
Roles  
@endsection
@section('scripts')
<script src="{{asset('assets/pages/scripts/admin/index.js')}}"></script> 
@endsection
@section('contenido')
<div class="row">
    <div class="col-lg-12">
        <div class="card card-default">
            @include('includes.mensaje')
            <div class="card-header with-border">
                <h3 class="card-title">Roles</h3>
                <div class="card-tools pull-right">
                    <a href="{{route('crear_rol')}}" class="btn btn-block btn-success btn-sm">
                        <i class="fa fa-fw fa-plus-circle"></i>Nuevo registro
                    </a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-stripped table-bordered table-hover" id="tabla-data">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th class="width70">Acciones</th>
                        </tr>
                        
                    </thead>
                    <tbody>
                        @foreach ($datas as $data)
                        <tr>
                            <td>{{$data->nombre}}</td>
                            <td>
                                <a href="{{route("editar_rol",['id'=>$data->id])}}" class="btn-accion-tabla tooltipsC" title="Editar este registro">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                            <form action="{{route('eliminar_rol',['id'=>$data->id])}}" class="d-inline form-eliminar" method="post">
                                @csrf @method('delete')
                                <button type="submit" class="btn-accion-tabla eliminar tooltipsC" title="Eliminar registro">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    
@endsection

