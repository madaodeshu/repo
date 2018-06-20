<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>K8 True Health</title>
  <?php
        include "../HeaderNFooter/css.php";  
  ?>
</head>


<body class="hold-transition skin-blue hidden-sidebar-mini sidebar-collapse">
    

    <!--Header Konten-->
      <?php
        include "../HeaderNFooter/header.php";  
       ?>

    
  <!--Aside Area-->
  <!--Aside Area Bagian Atas-->
  <div class="content-wrapper" id="P-b24">
    <!-- Content Header (Page header) -->
    <section class="content-header b-26">
      <h1 class="b-27">Profile</h1>
    </section>

    


    <!--Aside Area Bagian Profile User-->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-blue">
              <div class="widget-user-image">
               <img class="img-circle" src="../image/ss.png" width="128px" height="128px" alt="User profile picture">
              </div>
              <!-- /.widget-user-image -->
              <h1 class="widget-user-username ">Nama User</h1>

              
            </div>
            
            <div class="box-footer " style=" padding:30px 0px; padding-bottom:0px;">
            
              <ul class="nav nav-stacked">
                <li><a href="#"><i class="fa fa-bell-o"></i> Notivication
                  <span class="label label-primary pull-right">12</span></a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> Inbox<span class="label label-primary pull-right">3</span></a></a></li>
                <li><a href="#"><i class="fa fa-file-text-o"></i> Drafts</a></li>

              </ul>
            </div>
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
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
              <li><a href="#log-book" data-toggle="tab">Log Book</a></li>
              <li><a href="#about-user" class="hidden-md hidden-lg" data-toggle="tab">About User</a></li>
            </ul>
            <div class="tab-content b-119" >




              <div class="active tab-pane" id="activity">


              <div class="arc-box b-127">
                  <a href="#collapse-post1" data-toggle="collapse" aria-controls="collapse-post1">
                  <button type="submit" class="btn btn-success arc">
                  <i class="fa fa-pencil"></i><span>&nbsp;&nbsp;Create New Archiever </span>
                  </button>
                  </a>
                  <a href="#collapse-post2" data-toggle="collapse" aria-controls="collapse-post2">
                  <button type="submit" class="btn btn-warning arc">
                  <i class="fa fa-pencil"></i><span>&nbsp;&nbsp;Create New Kaget </span>
                  </button>
                  </a>
                  <a href="#collapse-post2" data-toggle="collapse" aria-controls="collapse-post3">
                  <button type="submit" class="btn btn-info arc">
                  <i class="fa fa-pencil"></i><span>&nbsp;&nbsp;Create New Log Book </span>
                  </button>
                  </a>
              </div>
              
              <form class="box-body collapse collapseable b-141" id="collapse-post1">
                  <div class="form-group ">
                      <div class="col-sm-12 b-143">
                      <textarea class="form-control" rows="1" placeholder="The Tittle..."></textarea>
                      </div>
                      <div class="col-sm-12">
                        <textarea id="editor1" name="editor1" rows="10" cols="80" ></textarea>
                        </div>
                      <div class="col-md-12 b-149">
                          <div class="pull-left btn btn-default btn-file">
                            <i class="fa fa-image b-151"></i>&nbsp;&nbsp;Add Pictures
                            <input type="file" name="attachment">
                          </div>
                          <p class="help-block">&nbsp;&nbsp;Max. 32MB</p>
              

                        <div class="pull-right">
                        <a href="#collapse-post1" data-toggle="collapse" aria-controls="collapse-post1">
                        <button type="submit" class="btn btn-danger arc-cc">Cancel</button></a>
                        <button type="button" class="btn btn-info ">Submit</button>
                        </div>
                        </div>
                  </div>
              </form>



             <form  class="box-body no-padding collapse collapseable b-141" id="collapse-post2">
                  <div class="form-group ">
                      <div class="col-sm-12 b-143" style="padding-top:10px;">
                      <textarea class="form-control" rows="1" placeholder="The Tittle..."></textarea>
                      </div>
                      <div class="col-sm-12">
                       <textarea class="form-control" rows="3" placeholder="Some Articel..."></textarea>
                        </div>

                        

                        <div  class="col-md-12 b-149">
                      <div class=" btn btn-default no-padding btn-file">
                            <img src="../image/tambah-gambar.png" alt="..." class="margin">
                            <input type="file" name="attachment">
                          </div>

                          <div class=" btn btn-default no-padding btn-file">
                            <img src="../image/tambah-gambar.png" alt="..." class="margin">
                            <input type="file" name="attachment">
                          </div>

                          <div class=" btn btn-default no-padding btn-file">
                            <img src="../image/tambah-gambar.png" alt="..." class="margin">
                            <input type="file" name="attachment">
                          </div>

                          <div class=" btn btn-default no-padding btn-file">
                            <img src="../image/tambah-gambar.png" alt="..." class="margin">
                            <input type="file" name="attachment">
                          </div>

                          </div>




 
                         <div  class="col-md-12 b-149"> 
                        <div  class="pull-right">
                        <a href="#collapse-post2" data-toggle="collapse" aria-controls="collapse-post2">
                        <button type="submit" class="btn btn-danger arc-cc">Cancel</button></a>
                        <button type="button" class="btn btn-info ">Submit</button>
                        </div>
                        </div>
                  </div>
              </form>


             


                      




            

              
            
                <!-- Post -->
                <div class="box" style="margin-top:5px;">



                <div class="post "  style="padding:10px;">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="../image/ss.png" alt="user image">
                        <span class="username">
                          <a href="#">Nama User</a>
                            <i class="btn-box-tool fa fa-angle-double-right">
                            &nbsp;<span class="label label-success" style="font-size:15px;">Archiever</span>
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
                <div class="row margin-bottom ">
                    <div class="col-sm-12" >
                      <img class="img-responsive center" src="../image/photo4.jpg" alt="Photo" >
                    </div>
                    <!-- /.col -->
                    <!-- /.col -->
                  </div>

                </div>




                <!-- /.post -->
                <!-- Post -->
                <div class="post"  style="padding:10px 0px;">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="../image/ss.png" alt="user image">
                        <span class="username">
                          <a href="#">Nama User</a>
                            <i class="btn-box-tool fa fa-angle-double-right">
                            &nbsp;<span class="label label-warning" style="font-size:15px;">Kaget</span>
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
                      <img class="img-responsive" src="../image/photo5.jpg" alt="Photo">
                    </div>
                    <div class="col-sm-3">
                      <img class="img-responsive" src="../image/photo5.jpg" alt="Photo">
                    </div>
                    <div class="col-sm-3">
                      <img class="img-responsive" src="../image/photo5.jpg" alt="Photo">
                    </div>
                    <div class="col-sm-3">
                      <img class="img-responsive" src="../image/photo5.jpg" alt="Photo">
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
                    <img class="img-circle img-bordered-sm" src="../image/ss.png" alt="user image">
                        <span class="username">
                          <a href="#">Nama User</a>
                            <i class="btn-box-tool fa fa-angle-double-right">
                            &nbsp;<span class="label label-success" style="font-size:15px;">Archiever</span>
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
                <div class="row margin-bottom ">
                    <div class="col-sm-12" >
                      <img class="img-responsive center" src="../image/photo4.jpg" alt="Photo" >
                    </div>
                    <!-- /.col -->
                    <!-- /.col -->
                  </div>

                </div>




                <!-- /.post -->
                <!-- Post -->
                <div class="post"  style="padding:10px 0px;">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="../image/ss.png" alt="user image">
                        <span class="username">
                          <a href="#">Nama User</a>
                            <i class="btn-box-tool fa fa-angle-double-right">
                            &nbsp;<span class="label label-warning" style="font-size:15px;">Kaget</span>
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
                      <img class="img-responsive" src="../image/photo5.jpg" alt="Photo">
                    </div>
                    <div class="col-sm-3">
                      <img class="img-responsive" src="../image/photo5.jpg" alt="Photo">
                    </div>
                    <div class="col-sm-3">
                      <img class="img-responsive" src="../image/photo5.jpg" alt="Photo">
                    </div>
                     <div class="col-sm-3">
                      <img class="img-responsive" src="../image/photo5.jpg" alt="Photo">
                    </div>

                    <!-- /.col -->
                    <!-- /.col -->
                  </div>

                </div>
                <!-- /.post -->
                <!-- Post -->
                
                <!-- /.post -->
                <!-- /.post -->
                <!-- Post -->
                
                <!-- /.post -->
                <!-- /.post -->
              </div>
              </div>
              <!-- /.tab-pane -->
                




              <?php 
            include "archiever.php";
             ?>



            <?php 
            include "kaget.php";
             ?>



              <div class="tab-pane" id="log-book">
              </div>



              <?php 
            include "about-user.php";
             ?>
              <!-- /.tab-pane -->


              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->



        <!--Aside Area Bagian Notifikasi-->
        <div class="col-md-2 hidden-sm hidden-xs" >

          <div class="box box-widget ">
            <div class="box-header with-border  bg-blue">
              <h3 class="box-title">About User</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

              <p class="text-muted">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

              <p>
                <span class="label label-danger">UI Design</span>
                <span class="label label-success">Coding</span>
                <span class="label label-info">Javascript</span>
                <span class="label label-warning">PHP</span>
                <span class="label label-primary">Node.js</span>
              </p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->


          <!--Aside Area Bagian Jumlah Postingan-->
          
          <!-- /.box -->
        </div>
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>


  <!--Footer konten-->
      <?php
            include "../HeaderNFooter/footer.php";  
      ?>


  <!--Script konten-->
      <?php
            include "../HeaderNFooter/script.php";  
      ?>


</body>
</html>
