<!DOCTYPE html>
<html>
<head>

   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>K8 True Health</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link  href={!! asset('ProjectKKP/Asset/bootstrap/dist/css/bootstrap.min.css')!!} rel="stylesheet">
  <!-- Font Awesome -->
  <link  href={!! asset('ProjectKKP/Asset/font-awesome/css/font-awesome.min.css')!!} rel="stylesheet">
  <!-- Ionicons -->
  <link  href={!! asset('ProjectKKP/Asset/Ionicons/css/ionicons.min.css')!!} rel="stylesheet">

  <link  href={!! asset('ProjectKKP/Asset/css/mycss.css')!!} rel="stylesheet">
  <!-- Theme style -->
  <link  href={!! asset('ProjectKKP/Asset/css/AdminLTE.min.css')!!} rel="stylesheet">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link  href={!! asset('ProjectKKP/Asset/css/skins/_all-skins.min.css')!!} rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  

     <!--Header Konten-->
      <header class="main-header" id="H-b1">
    <!-- Logo -->
  <a href="profile.html" class="logo">
      <span class="logo-mini"><b>K8</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>K8</b>&nbsp;True Health</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          
        </ul>
      </div>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="hidden-sm hidden-xs">
            <form class="navbar-form" role="search">
            
              <input type="text" class="form-control cari" id="navbar-search-input" placeholder="Search">
              </form>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
           <li class="dropdown user user-menu"">
           
          <a>
              <span>Welcome Admin</span>
            </a>
            </li>
          <li class="dropdown user user-menu"">
           
          <a href="profile.html">
              <i class="fa fa-sign-out"></i> Log Out
            </a>
            </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>



  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->

      <!-- search form -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header" style="margin-top:20px;"><h5 style="text-align:center;">MENU NAVIGASI</h5></li>
        <li><a href="Index"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li><a href="Archiever"><i class="fa fa-pencil"></i><span>Archiever</span></a></li>  
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-image"></i> <span>Kaget</span>
            </span>
          </a>
        </li>      
        
        <li><a href="LogBook"><i class="fa fa-book"></i> <span>Log Book</span></a></li>
        <li><a href="Aplikasi"><i class="fa fa-info"></i><span> Tentang Aplikasi</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">




         <div class="col-md-12">
          <div class="nav-tabs-custom">
            <div class="tab-content b-119" >




              <div class="active tab-pane" id="activity">



            
                <!-- Post -->
                <div class="post"  style="padding:10px 0px;">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src={!! asset('ProjectKKP/image/ss.png')!!} alt="user image">
                        <span class="username">
                          <a href="#">Nama User</a>
                            <i class="btn-box-tool fa fa-angle-double-right">
                            </i>


              <!-- User image -->
              <li class="dropdown pull-right" style="list-style:none;">
              <a href="#" class="dropdown-toggle  btn-box-tool" data-toggle="dropdown" ><i class="fa fa-ellipsis-v "></i></a>
              <ul class="dropdown-menu " role="menu" >
                <li class="padding"><a href="#"><i class="fa fa-pencil"></i>Sunting</a></li>
                <li class="divider"></li>
                <li ><a href="#"><i class="fa fa-warning"></i>Hapus</a></li>

            </ul>
            </li>

                        

                        </span>
                    <span class="description">Shared publicly - Waktu Terbit</span>
                  </div>
                  <!-- /.user-block -->
                  <h4>The Titlle</h4>
                  <p>

                  </p>
                <div class="row margin-bottom">
                    <div class="col-sm-2">
                      <img class="img-responsive" src={!! asset('ProjectKKP/image/tambah-gambar1.png')!!} alt="Photo">
                    </div>
                    <div class="col-sm-2">
                      <img class="img-responsive" src={!! asset('ProjectKKP/image/tambah-gambar1.png')!!} alt="Photo">
                    </div>
                   <div class="col-sm-2">
                      <img class="img-responsive" src={!! asset('ProjectKKP/image/tambah-gambar1.png')!!} alt="Photo">
                    </div>
                    <div class="col-sm-2">
                      <img class="img-responsive" src={!! asset('ProjectKKP/image/tambah-gambar1.png')!!} alt="Photo">
                    </div>
                    <div class="col-sm-2">
                      <img class="img-responsive" src={!! asset('ProjectKKP/image/tambah-gambar1.png')!!} alt="Photo">
                    </div>
                    <div class="col-sm-2">
                      <img class="img-responsive" src={!! asset('ProjectKKP/image/tambah-gambar1.png')!!} alt="Photo">
                    </div>
                    <!-- /.col -->
                    <!-- /.col -->
                  </div>

                </div>
                <!-- /.post -->



                <!-- Post -->
               <div class="post"  style="padding:10px 0px;">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src={!! asset('ProjectKKP/image/ss.png')!!} alt="user image">
                        <span class="username">
                          <a href="#">Nama User</a>
                            <i class="btn-box-tool fa fa-angle-double-right">
                            </i>


              <!-- User image -->
              <li class="dropdown pull-right" style="list-style:none;">
              <a href="#" class="dropdown-toggle  btn-box-tool" data-toggle="dropdown" ><i class="fa fa-ellipsis-v "></i></a>
              <ul class="dropdown-menu " role="menu" >
                <li class="padding"><a href="#"><i class="fa fa-pencil"></i>Sunting</a></li>
                <li class="divider"></li>
                <li ><a href="#"><i class="fa fa-warning"></i>Hapus</a></li>

            </ul>
            </li>

                        

                        </span>
                    <span class="description">Shared publicly - Waktu Terbit</span>
                  </div>
                  <!-- /.user-block -->
                  <h4>The Titlle</h4>
                  <p>

                  </p>
                <div class="row margin-bottom">
                    <div class="col-sm-2">
                      <img class="img-responsive" src={!! asset('ProjectKKP/image/tambah-gambar1.png')!!} alt="Photo">
                    </div>
                    <div class="col-sm-2">
                      <img class="img-responsive" src={!! asset('ProjectKKP/image/tambah-gambar1.png')!!} alt="Photo">
                    </div>
                   <div class="col-sm-2">
                      <img class="img-responsive" src={!! asset('ProjectKKP/image/tambah-gambar1.png')!!} alt="Photo">
                    </div>
                    <div class="col-sm-2">
                      <img class="img-responsive" src={!! asset('ProjectKKP/image/tambah-gambar1.png')!!} alt="Photo">
                    </div>
                    <div class="col-sm-2">
                      <img class="img-responsive" src={!! asset('ProjectKKP/image/tambah-gambar1.png')!!} alt="Photo">
                    </div>
                    <div class="col-sm-2">
                      <img class="img-responsive" src={!! asset('ProjectKKP/image/tambah-gambar1.png')!!} alt="Photo">
                    </div>
                    <!-- /.col -->
                    <!-- /.col -->
                  </div>

                </div>
                <!-- /.post -->
                <!-- Post -->
                
                <!-- /.post -->





                <div class="post"  style="padding:10px 0px;">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src={!! asset('ProjectKKP/image/ss.png')!!} alt="user image">
                        <span class="username">
                          <a href="#">Nama User</a>
                            <i class="btn-box-tool fa fa-angle-double-right">
                            </i>


              <!-- User image -->
              <li class="dropdown pull-right" style="list-style:none;">
              <a href="#" class="dropdown-toggle  btn-box-tool" data-toggle="dropdown" ><i class="fa fa-ellipsis-v "></i></a>
              <ul class="dropdown-menu " role="menu" >
                <li class="padding"><a href="#"><i class="fa fa-pencil"></i>Sunting</a></li>
                <li class="divider"></li>
                <li ><a href="#"><i class="fa fa-warning"></i>Hapus</a></li>

            </ul>
            </li>

                        

                        </span>
                    <span class="description">Shared publicly - Waktu Terbit</span>
                  </div>
                  <!-- /.user-block -->
                  <h4>The Titlle</h4>
                  <p>

                  </p>
                <div class="row margin-bottom">
                    <div class="col-sm-2">
                      <img class="img-responsive" src={!! asset('ProjectKKP/image/tambah-gambar1.png')!!} alt="Photo">
                    </div>
                    <div class="col-sm-2">
                      <img class="img-responsive" src={!! asset('ProjectKKP/image/tambah-gambar1.png')!!} alt="Photo">
                    </div>
                   <div class="col-sm-2">
                      <img class="img-responsive" src={!! asset('ProjectKKP/image/tambah-gambar1.png')!!} alt="Photo">
                    </div>
                    <div class="col-sm-2">
                      <img class="img-responsive" src={!! asset('ProjectKKP/image/tambah-gambar1.png')!!} alt="Photo">
                    </div>
                    <div class="col-sm-2">
                      <img class="img-responsive" src={!! asset('ProjectKKP/image/tambah-gambar1.png')!!} alt="Photo">
                    </div>
                    <div class="col-sm-2">
                      <img class="img-responsive" src={!! asset('ProjectKKP/image/tambah-gambar1.png')!!} alt="Photo">
                    </div>
                    <!-- /.col -->
                    <!-- /.col -->
                  </div>

                </div>
                <!-- /.post -->
                <!-- Post -->
                <div class="post"  style="padding:10px 0px;">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src={!! asset('ProjectKKP/image/ss.png')!!} alt="user image">
                        <span class="username">
                          <a href="#">Nama User</a>
                            <i class="btn-box-tool fa fa-angle-double-right">
                            </i>


              <!-- User image -->
              <li class="dropdown pull-right" style="list-style:none;">
              <a href="#" class="dropdown-toggle  btn-box-tool" data-toggle="dropdown" ><i class="fa fa-ellipsis-v "></i></a>
              <ul class="dropdown-menu " role="menu" >
                <li class="padding"><a href="#"><i class="fa fa-pencil"></i>Sunting</a></li>
                <li class="divider"></li>
                <li ><a href="#"><i class="fa fa-warning"></i>Hapus</a></li>

            </ul>
            </li>

                        

                        </span>
                    <span class="description">Shared publicly - Waktu Terbit</span>
                  </div>
                  <!-- /.user-block -->
                  <h4>The Titlle</h4>
                  <p>

                  </p>
                <div class="row margin-bottom">
                    <div class="col-sm-2">
                      <img class="img-responsive" src={!! asset('ProjectKKP/image/tambah-gambar1.png')!!} alt="Photo">
                    </div>
                    <div class="col-sm-2">
                      <img class="img-responsive" src={!! asset('ProjectKKP/image/tambah-gambar1.png')!!} alt="Photo">
                    </div>
                   <div class="col-sm-2">
                      <img class="img-responsive" src={!! asset('ProjectKKP/image/tambah-gambar1.png')!!} alt="Photo">
                    </div>
                    <div class="col-sm-2">
                      <img class="img-responsive" src={!! asset('ProjectKKP/image/tambah-gambar1.png')!!} alt="Photo">
                    </div>
                    <div class="col-sm-2">
                      <img class="img-responsive" src={!! asset('ProjectKKP/image/tambah-gambar1.png')!!} alt="Photo">
                    </div>
                    <div class="col-sm-2">
                      <img class="img-responsive" src={!! asset('ProjectKKP/image/tambah-gambar1.png')!!} alt="Photo">
                    </div>
                    <!-- /.col -->
                    <!-- /.col -->
                  </div>

                </div>
                <!-- /.post -->
                <!-- Post -->
                
                <!-- /.post -->
                <!-- /.post -->
              </div>
              </div>
              <!-- /.tab-pane -->
                










              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="pull-right">
       <i class="fa fa-user"></i> Design By : <b><a href"#">Said Farhan</a></b>
    </div>
    <strong>Copyright &copy; 2017.</strong>
  </footer>
  <button onclick="topFunction()" id="myBtn" title="Go to top"  class="btn btn-primary top1" >
    <i class="fa fa-angle-up fa-2x"></i></button>

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src={!! asset('ProjectKKP/Asset/jquery/dist/jquery.min.js')!!}></script>
<!-- Bootstrap 3.3.7 -->
<script src={!! asset('ProjectKKP/Asset/bootstrap/dist/js/bootstrap.min.js')!!}></script>
<!-- FastClick -->
<script src={!! asset('ProjectKKP/Asset/fastclick/lib/fastclick.js')!!}></script>
<!-- AdminLTE App -->
<script src={!! asset('ProjectKKP/Asset/js/adminlte.min.js')!!}></script>
<!-- AdminLTE for demo purposes -->
<script src={!! asset('ProjectKKP/Asset/js/demo.js')!!}></script></body>
</html>
