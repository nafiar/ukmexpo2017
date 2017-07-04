<div class="navbar navbar-default navbar-fixed-top" style="color: #3e3e3e;">
  <div class="container">
    <div class="navbar-header">
      <div class="navbar-brand" style="float: left;">
      <img class="pull-left" src="{{url('img')}}/{{session('ukm')['foto_ukm']}}" style="max-width: 40px; max-height: 40px; margin-top: -7px;">
      </div>
      <a href="{{url('/profilukm')}}/{{session('ukm')['id_ukm']}}" class="navbar-brand">
        <p>{{session('ukm')['nama_ukm']}}</p></a>  
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="navbar-collapse collapse" id="navbar-main">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{url('/daftaranggota')}}"><i class="glyphicon glyphicon-user"></i> Daftar Anggota</a></li>
        <li><a href="{{url('/pengumumanukm')}}"><i class="glyphicon glyphicon-info-sign"></i> Pengumuman</a></li>
        <li><a href="{{url('/home')}}"><i class="glyphicon glyphicon-home"></i> Home Ukm Expo</a></li>
      </ul>
    </div>
  </div>
</div>