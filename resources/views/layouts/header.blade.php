<header class="main-header">

  <!-- Logo -->
  <a href="#" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><img src="{{asset("img/sby.png")}}" height="40px" style="margin-right: 10px"></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><img src="{{asset("img/sby.png")}}" height="40px" style="margin-right: 10px"><span style="font-size: 16px">Manajemen Kegiatan</span></span>
  </a>

  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav" style="margin-top: 15px; margin-right: 390px; color: #fff;">
        <li>@yield('navtitle')</li>
      </ul>
      <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="{{asset('images/user-01.png')}}" class="user-image" alt="User Image">
            <span class="hidden-xs">{{session('user')['name']}}</span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="{{asset('images/user-01.png')}}" class="img-circle" alt="User Image">
              <p>
                {{session('user')['name']}}
                <small>Klik tombol Sign Out untuk keluar, tombol Setting untuk ganti password</small>
              </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                @if(session('user')['role'] != 4)
                <a href="/manajemensoal/dashboard/setting" class="btn btn-default btn-flat">Setting</a>
                @endif 
                @if(session('user')['role'] == 4)
                <a href="/manajemenkegiatan/dashboard/setting" class="btn btn-default btn-flat">Setting</a>
                @endif
              </div>
              <div class="pull-right">
                <a href="/logout" class="btn btn-default btn-flat">Sign out</a>
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