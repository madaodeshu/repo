@extends('admin.default')


@section('content')
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
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
          <h1><center><b>Komunitas K8</b></center></h1>
          <center><img src={!! asset('template/image/K8_lg.png')!!} width="450" height="250" /></center>
          <center><h2><b>Copyright &copy;  2017</b></h2></center>
          <center><h4><b><i class="fa fa-admin"></i> Design By : <b><a href"#">Said Farhan</a></b></b></h4></center>
                </div><!-- /.box-header -->
                <div class="box-body">
          
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section>
    <!-- /.content -->
  </div>
@endsection