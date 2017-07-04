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
    <li class=""><a href="/admin/pengumumanukm/{{session('user')['id_ukm_user']}}/edit"><i class="glyphicon glyphicon-plus"></i>Edit Pengumuman Ukm</a></li>
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
                <h3>{{$pengumuman->judul_pengumuman}}</h3> 
            </div>
            <div class="panel-body">
                <h4>{{$pengumuman->isi_pengumuman}}</h4>
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