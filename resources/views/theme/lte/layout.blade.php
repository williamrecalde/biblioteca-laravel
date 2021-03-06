<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('titulo','Biblioteca') | Curso laravel Willreca</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset("assets/$theme/plugins/fontawesome-free/css/all.min.css")}}">
  <!-- Ionicons -->
  <!--http://code.ionicframework.com/1.3.3/css/ionic.css-->
  <!--link rel="stylesheet" href="http://code.ionicframework.com/1.3.3/css/ionic.css"-->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/adminlte.min.css")}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
 
  @yield('styles')
  <link rel="stylesheet" href="{{asset("css/custom.css")}}">  
</head>
<body class="hold-transition sidebar-mini layout-boxed">
<!-- Site wrapper -->
<div class="container">
  <!-- Navbar -->
 @include("theme/$theme/header")
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include("theme/$theme/aside")
  <!--fin de aside-->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <section class="content">
      @yield('contenido')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper --> 
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!--pie de pagina footer-->
  @include("theme/$theme/footer")
   <!--fin footer-->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset("assets/$theme/plugins/jquery/jquery.min.js")}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset("assets/$theme/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<!-- AdminLTE App -->
<script src="{{asset("assets/$theme/dist/js/adminlte.min.js")}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset("assets/$theme/dist/js/demo.js")}}"></script>
<!-- funciones agregadas jqueryvalidation y funciones propias-->
@yield('scriptsplugins')
<script src="{{asset("js/valjquery/jquery.validate.min.js")}}"></script>
<script src="{{asset("js/valjquery/localization/messages_es.min.js")}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="{{asset("assets/js/valjquery/funciones.js")}}"></script>

<script src="{{asset("assets/js/scripts.js")}}"></script>

@yield('scripts')

</body>
</html>
