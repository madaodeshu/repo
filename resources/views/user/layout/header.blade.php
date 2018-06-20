      <header class="main-header" id="H-b1">
    <!-- Logo -->
  <a href="profile.html" class="logo">
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>K8</b>&nbsp;True Health</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
    <ul class="nav navbar-nav">
    <li class="hidden-sm hidden-xs pull-left">
            <form class="navbar-form" role="search">
            
              <input type="text" class="form-control cari b-15" id="navbar-search-input" placeholder="Search">
              </form>
          </li>
    </ul>
      <div class="navbar-custom-menu">

        <ul class="nav navbar-nav" >
          
          <!-- User Account: style can be found in dropdown.less -->
            <li style="padding-right:15px;"><a href="#"><i class="fa fa-info"></i>&nbsp;&nbsp;Tentang Aplikasi</a></li>
          <li class="dropdown user user-menu">
              <!-- User image -->
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gear"></i> Pengturan <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu" >
                <li ><a href="#" style="color:#333333" ><i class="fa fa-pencil"></i>Sunting Akun</a></li>
                
                <li class="divider"></li>
                <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
            </ul>
            </li>
            
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>