<header class="main-header">

  <!-- Logo -->
  <a href="#" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><img src="{{asset("img/logoukmexpo.png")}}" height="40px" style="margin-right: 10px"></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><img src="{{asset("img/logoukmexpo.png")}}" height="40px" style="margin-right: 10px"><span style="font-size: 16px">Admin UKM</span></span>
  </a>

  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
      
      <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="{{asset('img/user-01.png')}}" class="user-image" alt="User Image">
            <span class="hidden-xs">{{session('user')['nama_ukm']}}</span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="{{asset('img/user-01.png')}}" class="img-circle" alt="User Image">
              <p>
                {{session('user')['nama_ukm']}}
                <small>Klik tombol Sign Out untuk keluar, tombol Setting untuk ganti password</small>
              </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-right">
                <a href="/logout" class="btn btn-default btn-flat">Log out</a>
              </div>
            </li>
          </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->
        {{-- <li>
          <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
        </li> --}}
      </ul>
    </div>

  </nav>
</header>