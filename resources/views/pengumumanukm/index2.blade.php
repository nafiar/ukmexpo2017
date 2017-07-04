@extends('layouts.main')

@section('title', 'Pengumuman UKM')

@section('title-content')
Pengumuman UKM
@endsection

@section('breadcrumb')
<li><i class="fa fa-dashboard"></i> Home</a></li>
<li></i> Pengumuman UKM</a></li>
<li class="active"></i> Pengumuman UKM</a></li>
@endsection

@section('content')
<ul class="nav nav-pills">
    <li class="active"><a href="/admin/pengumumanukm"><i class="glyphicon glyphicon-align-justify"></i>Pengumuman Ukm</a></li>
    <li class=""><a href="/admin/pengumumanukm/create"><i class="glyphicon glyphicon-plus"></i>Tambahkan Pengumuman Ukm</a></li>
</ul>
<div class="box box-primary">
    <div class="box-body" style="padding: 10px 20px;">
        @if ($errors->count()>0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
            <br>
        @endif
        @if (Session::get('message'))
            <div class="alert alert-success" >
               {{Session::get('message')}}
            </div>
            <br>
        @endif
        <h4>Saat ini masih belum ada pengumuman yang akan ditampilkan di halaman UKM</h4>
        <!-- <div class="panel panel-primary ">
            <div class="panel-heading">
                <h3>Pengumuman</h3> 
            </div>
            <div class="panel-body">
                <h4>Bagi Kamu yang diterima silahkan datang pada acara Welcome Party yang akan diadakan di SAS Mulyosari pada hari sabtu 10 mei pada jam : 19:00 - Selesai</h4>
                <br>
                
            </div> -->              
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