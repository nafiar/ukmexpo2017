@php

@endphp
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar" style="height:auto">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{asset('images/user-01.png')}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{session('user')['name']}}</p>
        @if(session('user')['role'] == 2)
          <a href="#"><i class="fa fa-circle text-success"></i> {{session('user')['namaMapel']}}</a>
        @endif
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
        @if(session('user')['role'] == 1)
          <a href="/manajemensoal/dashboard">
        @elseif(session('user')['role'] == 2)
          <a href="/manajemensoal/dashboard">
        @elseif(session('user')['role'] == 3)
          <a href="/manajemensoal/dashboard">
        @elseif(session('user')['role'] == 4)
          <a href="/manajemenkegiatan/dashboard">
        @elseif(session('user')['role'] == 5)
          <a href="/manajemenkegiatan/dashboard">
        @endif
          <i class="fa fa-home"></i> <span>Home</span>
        </a>
      </li>
      @if(session('user')['role'] == 4)
      <li class="treeview">
        <a href="/manajemenkegiatan/sekolah">
          <i class="fa fa-university"></i> <span>Sekolah</span>
        </a>
      </li>
      <li class="treeview">
        <a href="{{ url('/manajemenkegiatan/server') }}">
          <i class="fa fa-server"></i> <span>Server</span>
        </a>
      </li>  
      <li class="treeview">
        <a href="/manajemenkegiatan/sekolah">
          <i class="fa fa-users"></i> <span>Siswa</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="/manajemenkegiatan/sekolah/siswa"><i class="fa fa-users"></i>Data Semua Siswa</a></li>
          <li><a href="/manajemenkegiatan/sekolah/agamasiswa"><i class="fa fa-users"></i>Data Agama Siswa</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="{{ url('/upload/jawaban') }}">
          <i class="fa fa-file-archive-o"></i> <span>Upload</span>
        </a>
      </li>
      
      @endif
      @if(session('user')['role'] == 5)
      <li class="treeview">
        <a href="{{ url('/monitor/sinkronisasi') }}">
          <i class="fa fa-file-archive-o"></i> <span>Periksa Sinkronisasi</span>
        </a>
      </li>
      <li class="treeview">
        <a href="">
          <i class="fa fa-check"></i> <span>Koreksi Jawaban</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="/jawaban/list"><i class="fa fa-file"></i>Download Berkas Jawaban</a></li>
          <li><a href="/upload/penilaian"><i class="fa fa-check"></i>Penilaian Jawaban</a></li>
        </ul>
      </li>
      @endif
      <!-- <li class="treeview">
        <a href="{{ url('/manajemenkegiatan/print') }}">
          <i class="fa fa-file-pdf-o"></i> <span>Cetak Berkas</span>
        </a>
      </li>
      @if(session('user')['role'] == 3)
      <li class="treeview">
        <a href="/manajemensoal/kelas">
          <i class="fa fa-users"></i> <span>Kelas</span>
        </a>
      </li>
      <li class="treeview">
        <a href="/manajemensoal/mapel">
          <i class="fa fa-book"></i> <span>Mata Pelajaran</span>
        </a>
      </li>
      @endif -->
      @if(session('user')['role'] != 4 || session('user')['role'] != 5)
      <li class="treeview">
        <a href="/manajemensoal/paketsoal">
          <i class="fa fa-list"></i> <span>Paket Soal</span>
        </a>
      </li>
      <li class="treeview">
        <a href="{{ url('/uploads/dokumen/panduan_manajemen_soal_v2.0.pdf') }}">
          <i class="fa fa-book"></i> <span>Download Panduan</span>
        </a>
      </li>
      @endif
      @if(session('user')['role'] == 1)
      <li class="treeview">
        <a href="/manajemensoal/monitoring">
          <i class="fa fa-users"></i> <span>Monitoring Petugas</span>
        </a>
      </li>
      @endif
      <li class="treeview">
        <a href="/logout">
          <i class="glyphicon glyphicon-off"></i> <span>Sign Out</span>
        </a>
      </li>-->
    </ul>
  </section>
   /.sidebar
</aside>