@extends('layouts.main')

@section('title', 'Profil UKM')

@section('title-content')
Profil UKM
@endsection

@section('breadcrumb')
<li><i class="fa fa-dashboard"></i> Home</a></li>
<li></i> Profil UKM</a></li>
<li class="active"></i> Profil UKM</a></li>
@endsection

@section('content')
<ul class="nav nav-pills">
    <li class="active"><a href="/admin/profilukm"><i class="glyphicon glyphicon-align-justify"></i>Profil Ukm</a></li>
    <li class=""><a href="/admin/profilukm/{{session('user')['id_ukm_user']}}/edit"><i class="glyphicon glyphicon-plus"></i>Edit Profil Ukm</a></li>
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
        <div class="panel panel-primary ">
            <div class="panel-heading">
                <h3>Profil</h3> 
            </div>
            <div class="panel-body">
                <p>UKM Sepakbola ITS merupakan Unit Kegiatan yang menaungi mahasiswa ITS dalam bidang olahraga Sepakbola dan Futsal. Adanya UKM ini diharapkan dapat terus mengasah bakat-bakat mahasiswa kampus perjuangan hingga pada akhirnya dapat meraih prestasi non-akademik, khususnya di bidang olahraga Sepakbola dan Futsal.</p>
                
            </div>              
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