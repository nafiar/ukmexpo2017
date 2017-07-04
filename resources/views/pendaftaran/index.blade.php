@extends('layouts.main')

@section('title', 'Pendaftaran')

@section('title-content')
Pendaftaran
@endsection

@section('breadcrumb')
<li><i class="fa fa-dashboard"></i> Home</a></li>
<li></i> Pendaftaran</a></li>
<li class="active"></i> List Pendaftar</a></li>
@endsection

@section('content')
<ul class="nav nav-pills">
    <li class="active"><a href="/admin/pendaftaran"><i class="glyphicon glyphicon-align-justify"></i>List Pendaftar</a></li>
    <li class=""><a href="/admin/pendaftaran/diterima/"><i class="glyphicon glyphicon-align-justify"></i>List Diterima</a></li>
    <li class=""><a href="/admin/pendaftaran/create"><i class="glyphicon glyphicon-plus"></i>Form Pendaftar</a></li>
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
            <div class="alert alert-success">
               {{Session::get('message')}}
            </div>
            <br>
        @endif
        <h3 style="text-align: center; margin-bottom: 20px;">Pendaftar di {{session('user')['nama_ukm']}}</h3>
        <table id="tableKelas" class="table table-striped">
            <thead>
                <tr class="info judul-kolom">
                    <th >No</th>
                    <th class="col-md-2">NRP</th>
                    <th class="col-md-3">Nama</th>
                    <th class="col-md-2">Nomor HP</th>
                    <th class="col-md-4 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($pendaftars as $index => $pendaftar)
                @if($index % 2==0)
                <tr>
                @endif
                    <td>{{$index+1}}</td>
                    <td>{{$pendaftar->nrp_maba}}</td>
                    <td>{{$data_pendaftar[$pendaftar->nrp_maba]['nama_maba']}}</td>
                    <td>{{$data_pendaftar[$pendaftar->nrp_maba]['nomor']}}</td>
                    <td class="text-center">
                        <a href="/admin/pendaftaran/profilpendaftar/{{$pendaftar->nrp_maba}}" class="btn btn-sm btn-info   " style="margin: 0 10px;">Profil Pendaftar</a>
                        <a href="/admin/pendaftaran/{{$pendaftar->nrp_maba}}" class="btn btn-sm btn-primary">Detail Pendaftaran</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <br>
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