@extends('admin.default')


@section('content')

<div class="content-wrapper">

<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">

                </div><!-- /.box-header -->
                <div class="box-body">

<div class="user-block">
            <a href="#" data-toggle="modal" data-target="#myModal" style="color:#666666">
            <button type="submit" class="btn btn-success">
                  <i class="fa fa-pencil"></i><span>&nbsp;&nbsp;Create New User Parent </span>
            </button>
            </a>
 </div>
<div class="nav-tabs-custom" style="margin-top:5px;">
            <ul class="nav nav-tabs b-113">
              <li class="active"><a href="#activity" data-toggle="tab">User Parent</a></li>
              <li><a href="#archiever" data-toggle="tab">User Child</a></li>

            </ul>
            <div class="tab-content b-119" >




              <div class="active tab-pane" id="activity">
				  <table id="data" class="table table-bordered table-striped table-scalable">
				<thead>
					<tr>
                        <th>No id</th>
						<th>NIK</th>
                        <th>Email</th>
						<th>Nama</th>
						<th>Tanggal Lahir</th>
						<th>Alamat</th>
						<th>Pekerjaan</th>
						<th>No Telepon</th>
                        <th>Gender</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					
								<tr>
                                 @foreach($resource as $user)
									<td>{{$user->id }}</td>
									<td>{{$user->nik }}</td>
									<td>{{$user->email }}</td>
									<td>{{$user->name }}</td>
									<td>{{$user->tgl_lahir }}</td>
									<td>{{$user->alamat }}</td>
                                    <td>{{$user->pekerjaan }}</td>
                                    <td>{{$user->no_hp }}</td>
                                    <td>{{$user->gender }}</td>
									<td>
										<a href='#' class='open_modal' id='D980098'>Edit</a> |
										<a href='#' onClick='confirm_delete("mahasiswa_delete.php?NIM=D980098")'>Delete</a>
									</td>
                                    @endforeach
								</tr>				
				</tbody>                  
								</table>
                </div>

                <div class="tab-pane" id="archiever">
				  <table id="data" class="table table-bordered table-striped table-scalable">
				<thead>
					<tr>
						<th>nik</th>
						<th>Nama</th>
						<th>Tanggal Lahir</th>
						<th>Alamat</th>
						<th>Pekerjaan</th>
						<th>No Telepon</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					
								<tr>
									<td>D980098</td>
									<td>Ikhsan</td>
									<td>15-03-2017</td>
									<td>Jalan Mana</td>
									<td>Dokter</td>
									<td>0822222222</td>
									<td>
										<a href='#' class='open_modal' id='D980098'>Edit</a> |
										<a href='#' onClick='confirm_delete("mahasiswa_delete.php?NIM=D980098")'>Delete</a>
									</td>
								</tr>			
				</tbody>                  
								</table>
                </div>

                <!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
          </div>
        </section>


</div>

  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- body modal -->
        <div class="modal-body">
          <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}


                        <div class="form-group{{ $errors->has('id') ? ' has-error' : '' }}">
                            <label for="id" class="col-md-4 control-label">NIK</label>

                            <div class="col-md-6">
                                <input id="nik" type="text" class="form-control" name="nik" value="{{ old('nik') }}" required autofocus>

                                @if ($errors->has('nik'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nik') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nama</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tgl_lahir') ? ' has-error' : '' }}">
                            <label for="tgl_lahir" class="col-md-4 control-label">Tanggal Lahir</label>

                            <div class="col-md-6">
                                <input id="tgl_lahir" type="date" class="form-control" name="tgl_lahir" value="{{ old('tgl_lahir') }}" required autofocus>

                                @if ($errors->has('tgl_lahir'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tgl_lahir') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('pekerjaan') ? ' has-error' : '' }}">
                            <label for="pekerjaan" class="col-md-4 control-label">Pekerjaan</label>

                            <div class="col-md-6">
                                <input id="pekerjaan" type="text" class="form-control" name="pekerjaan" value="{{ old('pekerjaan') }}" required autofocus>

                                @if ($errors->has('pekerjaan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pekerjaan') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                            <label for="alamat" class="col-md-4 control-label">Alamat</label>

                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control" name="alamat" value="{{ old('alamat') }}" required autofocus>

                                @if ($errors->has('alamat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('no_hp') ? ' has-error' : '' }}">
                            <label for="no_hp" class="col-md-4 control-label">No HP</label>

                            <div class="col-md-6">
                                <input id="no_hp" type="text" class="form-control" name="no_hp" value="{{ old('no_hp') }}" required autofocus>

                                @if ($errors->has('no_hp'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('no_hp') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">Gender</label>

                            <div class="col-md-6">
                            <div class="radio">
                            <label>
                                <input id="gender1" type="radio"  name="gender" value="Laki-laki">Laki-laki
                                </label>
                            </div>
                                <div class="radio">
                            <label>
                                <input id="gender2" type="radio"  name="gender" value="Perempuan">Perempuan
                                </label>
                            </div>
                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">Direkrut Oleh</label>

                            <div class="col-md-6">
                            <select name="direkrut_oleh" form="carform" class="form-control">
                             @foreach($resource as $user)
                                <option value="{{$user->id }}">
                                {{$user->id }}.{{$user->name }}.({{$user->nik }})
                                </option>
                            @endforeach
                                
                            </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
        </div>

      </div>
    </div>
  </div>
@endsection