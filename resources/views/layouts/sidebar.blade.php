@php

@endphp
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar" style="height:auto">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{asset('img/user-01.png')}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{session('user')['nama_ukm']}}</p>
      </div>
    </div>
    <!-- search form -->
    {{-- <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
      </div>
    </form> --}}
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <li class="treeview">
        <a href="{{url('/admin/dashboard')}}">
          <i class="fa fa-home"></i> <span>Home</span>
        </a>
      </li>
      <li class="treeview">
        <a href="{{url('/admin/daftaranggota')}}">
          <i class="fa fa-users"></i> <span>Daftar Anggota</span>
        </a>
      </li>
      <li class="treeview">
        <a href="{{ url('/admin/profilukm') }}">
          <i class="fa fa-server"></i> <span>Profil UKM</span>
        </a>
      </li>  
      <li class="treeview">
        <a href="{{ url('/admin/pendaftaran')}}">
          <i class="glyphicon glyphicon-align-justify"></i> <span>Pendaftaran</span>
        </a>
      </li>
      <li class="treeview">
        <a href="{{ url('/admin/pengumumanukm') }}">
          <i class="glyphicon glyphicon-info-sign"></i> <span>Pengumuman UKM</span>
        </a>
      </li>
    </ul>
  </section>
</aside>