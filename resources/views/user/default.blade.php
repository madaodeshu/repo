<!DOCTYPE html>
<html>
<head>

    @include('user.layout.head')

</head>


<body class="hold-transition skin-blue hidden-sidebar-mini sidebar-collapse" >
    
    <!--Header Konten-->
     @include('user.layout.header')


  <!--Aside Area-->
  <!--Aside Area Bagian Atas-->
  <div class="content-wrapper" id="P-b24" style="background-color:#DBDBDB;">
    <!-- Content Header (Page header) -->
    <section class="content-header b-26">
      <h1 class="b-27">Profile</h1>
    </section>

    


    <!--Aside Area Bagian Profile User-->
    <section class="content">


      <!-- /.row -->
      @yield('content')

      
    </section>
    <!-- /.content -->
  </div>




  <!--Footer konten-->
  @include('user.layout.footer')


  <!--Script konten-->
      <!-- jQuery 3 -->
   @include('user.layout.script')   





</body>
</html>
