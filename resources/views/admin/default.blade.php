<!DOCTYPE html>
<html>
<head>

  @include('admin.layout.head')

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  

       <!--Header Konten-->
       @include('admin.layout.header')




  <!-- Left side column. contains the logo and sidebar -->
      @include('admin.layout.sidebar')

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- /.content-wrapper -->
       



      <!--Footer -->
@include('admin.layout.footer')

  



<!-- ./wrapper -->

<!-- Script -->
@include('admin.layout.script')

</body>
</html>
