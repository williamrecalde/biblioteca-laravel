@extends("theme.$theme.layout")
@section('titulo')
Permisos
@endsection
@section('contenido')
<div class="row">
    <div class="col-lg-12">
      <div class="card border-primary mb-3">
        <div class="card-header">
          <h3 class="card-title">Permisos</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body border-primary">
            <table class="table table-hover table-bordered table-dark">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($permisos as $permiso)
                    <tr>
                        <th scope="row">{{$permiso->id}}</th>
                        <td>{{$permiso->nombre}}</td>
                        <td>{{$permiso->slug}}</td>
                        <td>vacio</td>
                      </tr>
                    @endforeach  
                </tbody>
              </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
          <ul class="pagination pagination-sm m-0 float-right">
            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
          </ul>
        </div>
      </div>
      <!-- /.card -->
    </div>
</div>
@endsection