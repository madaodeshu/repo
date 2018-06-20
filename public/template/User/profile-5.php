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
      <h5 class="hidden-md hidden-lg">
        <a href="kat-kangenkaterk8.com">
          <i class="fa fa-home b-30"><b>Kat-KangenWaterK8.com</b></i>
        </a>
      </h5>

      <ol class="breadcrumb hidden-sm hidden-xs b-34">
        <li><a href="kat-kangenkaterk8.com"><i class="fa fa-home b-35"><b>Kat-KangenWaterK8.com</b></i></a></li>
      </ol>
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
               <img class="profile-user-img img-responsive img-circle" src="../image/ss.png" width="128px" height="128px" alt="User profile picture">
              </div>
              <!-- /.widget-user-image -->
              <h1 class="widget-user-username ">Nama User</h1>

              
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
                <li><a href=""><i class="fa fa-circle-o text-green"></i> Archiever<span class="label label-success pull-right">12 Post</span></a></li>
                <li><a href=""><i class="fa fa-circle-o text-yellow"></i> Kaget<span class="label label-warning pull-right">3 Post</span></a></li>
                <li><a href=""><i class="fa fa-circle-o text-light-blue"></i> Log Book<span class="label label-primary pull-right">5 Post</span></a></li>
              </ul>
            </div>
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
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
          <!-- /.box -->
        </div>






        <!--Aside Area Bagian Postingan-->
        <div class="col-md-8">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs b-113">
              <li class="active"><a href="#activity" data-toggle="tab">All Post</a></li>
              <li><a href="#archiever" data-toggle="tab">Archiever</a></li>
              <li><a href="#timeline" data-toggle="tab">Timeline</a></li>
              <li class="hidden-md hidden-lg"><a href="#settings" data-toggle="tab">Mails</a></li>
            </ul>
            <div class="tab-content b-119" >




              <div class="active tab-pane" id="activity">


              <div class="arc-box b-127">
                  <a href="#collapse-post2" data-toggle="collapse" aria-controls="collapse-post2">
                  <button type="submit" class="btn btn-success arc">
                  <i class="fa fa-pencil"></i><span>&nbsp;&nbsp;Create New Archiever </span>
                  </button>
                  <button type="submit" class="btn btn-warning arc">
                  <i class="fa fa-pencil"></i><span>&nbsp;&nbsp;Create New Kaget </span>
                  </button>
                  <button type="submit" class="btn btn-info arc">
                  <i class="fa fa-pencil"></i><span>&nbsp;&nbsp;Create New Log Book </span>
                  </button>
                  </a>
              </div>
              
              <form class="box-body collapse collapseable b-141" id="collapse-post2">
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
                        <a href="#collapse-post2" data-toggle="collapse" aria-controls="collapse-post2">
                        <button type="submit" class="btn btn-danger arc-cc">Cancel</button></a>
                        <button type="button" class="btn btn-info ">Submit</button>
                        </div>
                        </div>
                  </div>
              </form>
            

              
            
                <!-- Post -->
                <div class="box" style="margin-top:5px;">
                <div class="post"  style="padding:10px 0px;">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="../image/ss.png" alt="user image">
                        <span class="username">
                          <a href="#">Nama User</a>
                            <i class="btn-box-tool fa fa-angle-double-right">
                            <span class="label label-success" style="font-size:15px;">Archiever</span>
                            </i>
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
                    <img class="img-circle img-bordered-sm" src="../image/ss.png" alt="user image">
                        <span class="username">
                          <a href="#">Nama User</a>
                          <i class="btn-box-tool fa fa-angle-double-right">
                            <span class="label label-success" style="font-size:15px;">Archiever</span>
                            </i>
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
                
                <!-- /.post -->






                <div class="post"  style="padding:10px 0px;">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="../image/ss.png" alt="user image">
                        <span class="username">
                          <a href="#">Nama User</a>
                          <i class="btn-box-tool fa fa-angle-double-right">
                            <span class="label label-info" style="font-size:15px;">Log Book</span>
                            </i>
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
                    <img class="img-circle img-bordered-sm" src="../image/ss.png" alt="user image">
                        <span class="username">
                          <a href="#">Nama User</a>
                          <i class="btn-box-tool fa fa-angle-double-right">
                            <span class="label label-warning" style="font-size:15px;">Kaget</span>
                            </i>
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
                
                <!-- /.post -->
                <!-- /.post -->
              </div>
              </div>
              <!-- /.tab-pane -->
                




          <div class="tab-pane" id="archiever">
         
              <form class="box-body" style="border:1px solid #ecf0f5;">
                  <div class="form-group ">
                      <div class="col-sm-12" style="margin-bottom:5px;">
                      <textarea class="form-control" rows="2" placeholder="The Tittle..."></textarea>
                      </div>
                      <div class="col-sm-12">
                        <textarea id="editor2" name="editor2" rows="10" cols="80" ></textarea>
                        </div>

                        <div class="form-group pull-right" style="margin:10px 0px;">
                        
                        <button type="button" class="btn btn-info ">Submit</button>
                        </div>
                  </div>
              </form>
            
                <!-- Post -->
                <div class="box">
                <div class="post"  style="padding:10px 0px;">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="../image/ss.png" alt="user image">
                        <span class="username">
                          <a href="#">Nama User</a>
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
                    <img class="img-circle img-bordered-sm" src="../image/ss.png" alt="user image">
                        <span class="username">
                          <a href="#">Nama User</a>
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
                    <img class="img-circle img-bordered-sm" src="../image/ss.png" alt="user image">
                        <span class="username">
                          <a href="#">Nama User</a>
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





              <div class="tab-pane" id="timeline">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-red">
                          10 Feb. 2014
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-envelope bg-blue"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                      <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                      <div class="timeline-body">
                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                        weebly ning heekya handango imeem plugg dopplr jibjab, movity
                        jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                        quora plaxo ideeli hulu weebly balihoo...
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-primary btn-xs">Read more</a>
                        <a class="btn btn-danger btn-xs">Delete</a>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-user bg-aqua"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                      <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
                      </h3>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-comments bg-yellow"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                      <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                      <div class="timeline-body">
                        Take me to your leader!
                        Switzerland is small and neutral!
                        We are more like Germany, ambitious and misunderstood!
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-green">
                          3 Jan. 2014
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-camera bg-purple"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                      <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                      <div class="timeline-body">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <li>
                    <i class="fa fa-clock-o bg-gray"></i>
                  </li>
                </ul>
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



        <!--Aside Area Bagian Notifikasi-->

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
