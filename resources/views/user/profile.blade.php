@extends('user.default')

@section('content')

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-blue">
              <h3 class="widget-user-username">{{ Auth::user()->name }}</h3>
              <h5 class="widget-user-desc">{{ Auth::user()->nik }}</h5>
            </div>
            <div class="widget-user-image">
              <img id="preview" src="" onerror="this.src='{!! asset('template/image/ss.png')!!}';" alt=""  width="150px" height="150px"  class="img-circle gambar-profile">
            </div>
            <div class="box-footer">
              <div class="row" style="padding:-5px;">
              <div class="col-sm-6 border-right">
                  <div class="description-block">
                    <h5 class="description-header">Pekerjaan</h5>
                    <span class="description-text">{{ Auth::user()->pekerjaan }}</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <div class="col-sm-6 border-right">
                  <div class="description-block">
                    <h5 class="description-header">Tanggal Lahir</h5>
                    <span class="description-text">{{ Auth::user()->tgl_lahir }}</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                </div>
                <hr>
                <div class="row">
                <!-- /.col -->
                <div class="col-sm-12">
                  <div class="description-block">
                    <h5 class="description-header">Alamat</h5>
                    <span class="description-text">{{ Auth::user()->alamat }}</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>

          <div class="box box-widget" >
            <div class="box-header with-border bg-blue">
              <h3 class="box-title"><b>All Post</b></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked " >
                <li style="font-size:17px"><a href=""><i class="fa fa-circle-o text-green" style="padding:10px 0px;"></i>
                 Archiever<span class="label label-success pull-right">12 Post</span></a> </li>

                <li  style="font-size:17px"><a href=""><i class="fa fa-circle-o text-yellow" style="padding:10px 0px;"></i> 
                Kaget<span class="label label-warning pull-right">3 Post</span></a></li>

                <li  style="font-size:17px"><a href=""><i class="fa fa-circle-o text-light-blue" style="padding:10px 0px;"></i> 
                Log Book<span class="label label-primary pull-right">5 Post</span></a></li>

              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>






        <!--Aside Area Bagian Postingan-->
        <div class="col-md-7">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs b-113">
              <li class="active"><a href="#activity" data-toggle="tab">All Post</a></li>
              <li><a href="#archiever" data-toggle="tab">Archiever</a></li>
              <li><a href="#kaget" data-toggle="tab">Kaget</a></li>
              <li class="hidden-md hidden-lg"><a href="#settings" data-toggle="tab">Mails</a></li>
            </ul>
            <div class="tab-content b-119" >




              <div class="active tab-pane" id="activity">


              <div class="b-127">
                  <a href="#" data-toggle="modal" data-target="#post1">
                  <button type="submit" class="btn btn-success">
                  <i class="fa fa-pencil"></i><span>&nbsp;&nbsp;Create New Archiever </span>
                  </button>
                  </a>
                  <a href="#" data-toggle="modal" data-target="#post2">
                  <button type="submit" class="btn btn-warning">
                  <i class="fa fa-pencil"></i><span>&nbsp;&nbsp;Create New Kaget </span>
                  </button>
                  </a>
              </div>
              
              



            

              
            
                <!-- Post -->
                <div class="box" style="margin-top:5px;">
                 @if(session('response'))
                <div class="post"  style="padding:10px 0px;">

                  <!-- /.user-block -->
                  <p>
                    
                            <center>
                                {{ session('response') }}
                                </center>

                  </p>

                </div>
                 @endif

                 @foreach($resource as $arc)

                <div class="post"  style="padding:10px 0px;">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src={!! asset('template/image/ss.png')!!} alt="user image">
                        <span class="username">
                          <a href="#">{{ Auth::user()->name }}</a>
                            <i class="btn-box-tool fa fa-angle-double-right">&nbsp;
                            <span class="label label-success" style="font-size:15px;">Archiever</span>
                            </i>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Shared publicly at - {{ Auth::user()->created_at }}</span>
                  </div>
                  <!-- /.user-block -->
                  <p id="editor1">
                   {{ $arc->isi }}
                  </p>
                  <ul class="list-inline">
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                    </li>
                    <li class="pull-right">
                      <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                        (5)</a></li>
                  </ul>

                  <input class="form-control input-sm" type="text" placeholder="Type a comment">
                </div>
                @endforeach
                <!-- /.post -->
                <!-- Post -->
                
                <!-- /.post -->
                <!-- Post -->
                
                <!-- /.post -->
                <!-- /.post -->
              </div>
              </div>
              <!-- /.tab-pane -->
                




          <div class="tab-pane" id="archiever">

            
                <!-- Post -->
                <div class="box">
                <div class="post"  style="padding:10px 0px;">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src={!! asset('template/image/ss.png')!!} alt="user image">
                        <span class="username">
                          <a href="#">name User</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Shared publicly - Waktu Terbit</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore the hate as they create awesome
                    tools to help create filler text for everyone from bacon lovers
                    to Charlie Sheen fans.Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore the hate as they create awesome
                    tools to help create filler text for everyone from bacon lovers
                    to Charlie Sheen fans.
                  </p>
                  <ul class="list-inline">
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                    </li>
                    <li class="pull-right">
                      <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                        (5)</a></li>
                  </ul>

                  <input class="form-control input-sm" type="text" placeholder="Type a comment">
                </div>
                <!-- /.post -->
                <!-- Post -->
                <div class="post"  style="padding:10px 0px;">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src={!! asset('template/image/ss.png')!!} alt="user image">
                        <span class="username">
                          <a href="#">name User</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Shared publicly - Waktu Terbit</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore the hate as they create awesome
                    tools to help create filler text for everyone from bacon lovers
                    to Charlie Sheen fans.Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore the hate as they create awesome
                    tools to help create filler text for everyone from bacon lovers
                    to Charlie Sheen fans.
                  </p>
                  <ul class="list-inline">
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                    </li>
                    <li class="pull-right">
                      <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                        (5)</a></li>
                  </ul>

                  <input class="form-control input-sm" type="text" placeholder="Type a comment">
                </div>
                <!-- /.post -->
                <!-- Post -->
                <div class="post"  style="padding:10px 0px;">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src={!! asset('template/image/ss.png')!!} alt="user image">
                        <span class="username">
                          <a href="#">name User</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Shared publicly - Waktu Terbit</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore the hate as they create awesome
                    tools to help create filler text for everyone from bacon lovers
                    to Charlie Sheen fans.Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore the hate as they create awesome
                    tools to help create filler text for everyone from bacon lovers
                    to Charlie Sheen fans.
                  </p>
                  <ul class="list-inline">
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                    </li>
                    <li class="pull-right">
                      <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                        (5)</a></li>
                  </ul>

                  <input class="form-control input-sm" type="text" placeholder="Type a comment">
                </div>
                
                <!-- /.post -->
                </div>
            
            </div>





                        <div class="tab-pane" id="kaget">

            
                <!-- Post -->
                <div class="box">
                <div class="post"  style="padding:10px 0px;">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src={!! asset('template/image/ss.png')!!} alt="user image">
                        <span class="username">
                          <a href="#">name User</a>
                            <i class="btn-box-tool fa fa-angle-double-right">
                            </i>


              <!-- User image -->
              <li class="dropdown pull-right" style="list-style:none;">
              <a href="#" class="dropdown-toggle  btn-box-tool" data-toggle="dropdown" ><i class="fa fa-ellipsis-v fa-2x"></i></a>
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
                    <div class="col-sm-3">
                     <img src={!! asset('template/image/tambah-gambar.png')!!} alt="..." class="margin">
                    </div>
                    <div class="col-sm-3">
                      <img src={!! asset('template/image/tambah-gambar.png')!!} alt="..." class="margin">
                    </div>
                    <div class="col-sm-3">
                      <img src={!! asset('template/image/tambah-gambar.png')!!} alt="..." class="margin">
                    </div>
                    <div class="col-sm-3">
                      <img src={!! asset('template/image/tambah-gambar.png')!!} alt="..." class="margin">
                    </div>
                    <!-- /.col -->
                    <!-- /.col -->
                  </div>

                </div>




               <div class="post"  style="padding:10px 0px;">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src={!! asset('template/image/ss.png')!!} alt="user image">
                        <span class="username">
                          <a href="#">name User</a>
                            <i class="btn-box-tool fa fa-angle-double-right">
                            </i>


              <!-- User image -->
              <li class="dropdown pull-right" style="list-style:none;">
              <a href="#" class="dropdown-toggle  btn-box-tool" data-toggle="dropdown" ><i class="fa fa-ellipsis-v fa-2x"></i></a>
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
                    <div class="col-sm-3">
                      <img class="img-responsive" src={!! asset('template/image/tambah-gambar1.png')!!}  alt="Photo">
                    </div>
                    <div class="col-sm-3">
                      <img class="img-responsive" src={!! asset('template/image/tambah-gambar1.png')!!}  alt="Photo">
                    </div>
                    <div class="col-sm-3">
                      <img class="img-responsive" src={!! asset('template/image/tambah-gambar1.png')!!}  alt="Photo">
                    </div>
                    <div class="col-sm-3">
                      <img class="img-responsive" src={!! asset('template/image/tambah-gambar1.png')!!}  alt="Photo">
                    </div>
                    <!-- /.col -->
                    <!-- /.col -->
                  </div>

                </div>




                




                <div class="post"  style="padding:10px 0px;">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src={!! asset('template/image/ss.png')!!} alt="user image">
                        <span class="username">
                          <a href="#">name User</a>
                            <i class="btn-box-tool fa fa-angle-double-right">
                            </i>


              <!-- User image -->
              <li class="dropdown pull-right" style="list-style:none;">
              <a href="#" class="dropdown-toggle  btn-box-tool" data-toggle="dropdown" ><i class="fa fa-ellipsis-v fa-2x"></i></a>
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
                    <div class="col-sm-3">
                     <img src={!! asset('template/image/tambah-gambar.png')!!} alt="..." class="margin">
                    </div>
                    <div class="col-sm-3">
                      <img src={!! asset('template/image/tambah-gambar.png')!!} alt="..." class="margin">
                    </div>
                    <div class="col-sm-3">
                     <img src={!! asset('template/image/tambah-gambar.png')!!} alt="..." class="margin">
                    </div>
                    <div class="col-sm-3">
                     <img src={!! asset('template/image/tambah-gambar.png')!!} alt="..." class="margin">
                    </div>
                    <!-- /.col -->
                    <!-- /.col -->
                  </div>

                </div>




                
                <!-- /.post -->
                </div>
            
            </div>
              <!-- /.tab-pane -->

              <div class="tab-pane hidden-md hidden-lg" id="settings">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title" >Mails</h3>

            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="mailbox.html"><i class="fa fa-inbox"></i> Inbox
                  <span class="label label-primary pull-right">12</span></a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> Sent</a></li>
                <li><a href="#"><i class="fa fa-file-text-o"></i> Drafts</a></li>
                <li><a href="#"><i class="fa fa-filter"></i> Junk <span class="label label-warning pull-right">65</span></a>
                </li>
                <li><a href="#"><i class="fa fa-trash-o"></i> Trash</a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Labels</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#"><i class="fa fa-circle-o text-red"></i> Important</a></li>
                <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> Promotions</a></li>
                <li><a href="#"><i class="fa fa-circle-o text-light-blue"></i> Social</a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->



        <!--Aside Area Bagian Log Book-->
        <div class="col-md-2 hidden-sm hidden-xs" >

          <div class="box box-widget ">
            <div class="box-header with-border  bg-blue" style="text-align:center;">
              <h3 class="box-title" >Log Book</h3>
          </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="user-block">
            <a href="#" data-toggle="modal" data-target="#myModal" style="color:#666666">
             <img class="img-circle img-bordered-sm" src={!! asset('template/image/ss.png')!!} alt="user image" >
            <span class="description" style="margin-left:2px;" ><b>name User</b></span>
            <span class="description" style="margin-left:2px;" >082304402039</span>
            </a>
              </div>
              <hr>
            
              <div class="user-block">
            <a href="#" data-toggle="modal" data-target="#myModal" style="color:#666666">
             <img class="img-circle img-bordered-sm" src={!! asset('template/image/ss.png')!!} alt="user image" >
            <span class="description" style="margin-left:2px;" ><b>name User</b></span>
            <span class="description" style="margin-left:2px;" >082304402039</span>
            </a>
              </div>
              <hr>
            

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->


          <!--Aside Area Bagian Jumlah Postingan-->
          
          <!-- /.box -->
        </div>
      </div>



<!--Modal Data User Child-->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Bagian heading modal</h4>
        </div>
        <!-- body modal -->
        <div class="modal-body">
          <p>bagian body modal.</p>
        </div>
        <!-- footer modal -->
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup Modal</button>
        </div>
      </div>
    </div>
  </div>


<!--form archiever-->
<div id="post1" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Create Archiever</h4>
        </div>
        <!-- body modal -->
        <div class="modal-body">
          <form  class="box-body  b-141" role="form" method="POST" action="{{ url('/inputarc') }}" style="background-color:#f8f8f8">
           {{ csrf_field() }}
                  <div class="form-group " >
                  <div class="box-header" >
                  
                  <a href="#collapse-post1" data-toggle="collapse" aria-controls="collapse-post1" class="pull-right" style="padding-right:15px; margin-bottom:5px;">
                        <button type="submit" class="btn btn-default arc-cc"><i class="fa fa-times"></i></button></a>
                  </div>
                      <div class="col-sm-12 b-143">
                      <textarea class="form-control" name="judul" rows="2" placeholder="The Tittle..."></textarea>
                      </div>
                      <div class="col-sm-12">
                        <textarea id="editor1" name="isi" rows="10" cols="80" ></textarea>
                        </div>
                      <div class="col-md-12 b-149">
                          
                         
              
                        <div class="pull-left btn btn-default btn-file" style="margin-left:13px; margin-bottom:5px;">
                            <i class="fa fa-image b-151"></i>&nbsp;&nbsp;Add Pictures
                            <input type="file" name="attachment">
                       </div>
                        <div class="pull-right">
                        
                        <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                        </div>
                        </div>
                </div>
              </form>
        </div>
        <!-- footer modal -->
      </div>
    </div>
</div>

<!--form kaget-->
<div id="post2" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Create Kangen Gethering</h4>
        </div>
        <!-- body modal -->
        <div class="modal-body">
          <form  class="box-body no-padding b-141" id="collapse-post2">
                  <div class="form-group ">
                      <div class="col-sm-12 b-143" style="padding-top:10px;">
                      <textarea class="form-control" rows="1" placeholder="The Tittle..."></textarea>
                      </div>
                      <div class="col-sm-12">
                       <textarea class="form-control" rows="3" placeholder="Some Articel..."></textarea>
                        </div>

                        
                        <center>
                        <div  class="col-md-12 b-149">
                      <div class=" btn btn-default no-padding btn-file">
                            <img src={!! asset('template/image/tambah-gambar.png')!!} alt="..." class="margin">
                            <input type="file" name="attachment">
                          </div>

                          <div class=" btn btn-default no-padding btn-file">
                            <img src={!! asset('template/image/tambah-gambar.png')!!} alt="..." class="margin">
                            <input type="file" name="attachment">
                          </div>

                          <div class=" btn btn-default no-padding btn-file">
                            <img src={!! asset('template/image/tambah-gambar.png')!!} alt="..." class="margin">
                            <input type="file" name="attachment">
                          </div>

                          <div class=" btn btn-default no-padding btn-file">
                            <img src={!! asset('template/image/tambah-gambar.png')!!} alt="..." class="margin">
                            <input type="file" name="attachment">
                          </div>

                          </div>

                          </center>


 
                         <div  class="col-md-12 b-149"> 
                        <div  class="pull-right">
                        <button type="button" class="btn btn-info ">Submit</button>
                        </div>
                        </div>
                  </div>
              </form>
        </div>
        <!-- footer modal -->
      </div>
    </div>
  </div>



@endsection