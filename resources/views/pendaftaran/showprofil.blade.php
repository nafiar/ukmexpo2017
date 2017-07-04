@extends('layouts.main')

@section('title', 'Pendaftaran')

@section('title-content')
Profil Pendaftar
@endsection

@section('breadcrumb')
<li><i class="fa fa-dashboard"></i> Home</a></li>
<li></i> Daftar Anggota</a></li>
<li class="active"></i> List Anggota</a></li>
@endsection

@section('content')
<ul class="nav nav-pills">
    <li class=""><a href="/admin/pendaftaran"><i class="glyphicon glyphicon-align-justify"></i>List Pendaftar</a></li>
    <li class=""><a href="/admin/pendaftaran/diterima/"><i class="glyphicon glyphicon-align-justify"></i>List Diterima</a></li>
    <li class=""><a href="/admin/pendaftaran/create"><i class="glyphicon glyphicon-plus"></i>Form Pendaftaran</a></li>
    <li class="active"><a href="/admin/pendaftaran/profilpendaftar/{{$mahasiswa_baru->nrp_maba}}"><i class="glyphicon glyphicon-user"></i>Profil Mahasiswa</a></li>
</ul>
<div class="box box-primary">
    <div class="box-body" style="padding: 20px;">
        <div class="col-md-6 col-md-offset-3 panel panel-default">
          <h2 style="text-align: center;">Data Mahasiswa</h2>
          <div class="panel-body">
            
            <p>Nama : {{$mahasiswa_baru->nama_maba}}</p>
            <p>NRP : {{$mahasiswa_baru->nrp_maba}}</p>
            <p>Jurusan : {{$mahasiswa_baru->jurusan_maba}}</p>
            <p>Kota Asal : {{$detail_mahasiswa->asal_form}}</p>
            <p>Nomor HP : {{$detail_mahasiswa->nomor_form}}</p>
            <p>ID Line : {{$detail_mahasiswa->id_line_form}}</p>
          </div>  
        </div>
        @if($mendaftars)
          <div class="col-md-6 col-md-offset-3 panel panel-default">
            <h2 style="text-align: center;">Sudah Mendaftar di</h2>
            <div class="panel-body">
              @foreach($mendaftars as $index => $mendaftar)
                <a href="{{url('/profilukm')}}/{{$mendaftar['id_ukm']}}" class="btn btn-block btn-default" target="_blank">{{$index+1}}. {{$mendaftar['nama_ukm']}}</a>  
              @endforeach
            </div>  
          </div>
        @endif
        @if($diterimas)
          <div class="col-md-6 col-md-offset-3 panel panel-default">
            <h2 style="text-align: center;">Sudah Diterima di</h2>
            <div class="panel-body">
              @foreach($diterimas as $index => $diterima)
                <a href="{{url('/profilukm')}}/{{$diterima['id_ukm']}}" class="btn btn-block btn-default" target="_blank">{{$index+1}}. {{$diterima['nama_ukm']}}</a>
              @endforeach
            </div>  
          </div>
        @endif

        
        <div class="col-md-9 form-group">
            <a type="" class="btn btn-default pull-right" href="{{url('/admin/pendaftaran')}}" style="margin-rig: 10px;">Kembali</a>
        </div>
    </div>  
</div>
@endsection

@section('js')
<script>
  function colorSet(e){
    e.style.color="#555";
  }
  @if (session('create_success'))
  swal("Success", "Kelas berhasil ditambahkan  ", "success");
  @endif
</script>
@endsection