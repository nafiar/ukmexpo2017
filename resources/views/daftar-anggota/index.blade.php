@extends('layouts.main')

@section('title', 'Dashboard')

@section('title-content')
Daftar Anggota
@endsection

@section('breadcrumb')
<li><i class="fa fa-dashboard"></i> Home</a></li>
<li></i> Daftar Anggota</a></li>
<li class="active"></i> List Anggota</a></li>
@endsection

@section('content')
<ul class="nav nav-pills">
    <li class="active"><a href="/admin/daftaranggota"><i class="glyphicon glyphicon-align-justify"></i>List Anggota</a></li>
    <li class=""><a href="/admin/daftaranggota/create"><i class="glyphicon glyphicon-plus"></i>Tambah Anggota</a></li>
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
        <h3 style="text-align: center; margin-bottom: 20px;">Anggota dan Pengurus {{session('user')['nama_ukm']}}</h3>
        <table id="tableKelas" class="table table-striped">
            <thead>
                <tr class="danger judul-kolom">
                    <th >No</th>
                    <th class="col-md-3">NRP</th>
                    <th class="col-md-4">Nama</th>
                    <th class="col-md-3">Jabatan</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($anggotas as $index => $anggota)
                @if($index % 2==0)
                <tr class="warning">
                @else
                <tr>
                @endif
                    <td>{{$index+1}}</td>
                    <td>{{$anggota->nrp_anggota}}</td>
                    <td>{{$anggota->nama_anggota}}</td>
                    <td>{{$anggota->jabatan_anggota}}</td>
                    <td class="text-center">
                        <a href="/admin/daftaranggota/{{$anggota->nrp_anggota}}" class="btn btn-sm btn-primary">Detail</a>
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