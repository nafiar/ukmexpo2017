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
    <li class=""><a href="/admin/pendaftaran/create"><i class="glyphicon glyphicon-plus"></i>Form Pendaftar</a></li>
</ul>
<div class="box box-primary">
    <div class="box-body" style="padding: 20px;">
        @if ($errors->count()>0)
            <div class="alert-danger" style="color:red; text-align:left; font-weight:bold; padding: 0.5em">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
            <br>
        @endif
        @if (Session::get('message'))
            <div style="color:white; background-color: green; font-weight:bold; padding: 0.5em">
               {{Session::get('message')}}
            </div>
            <br>
        @endif
        <h4 style="text-align: center;">Pendaftar di {{session('user')['nama_ukm']}}</h4>
        <table id="tableKelas" class="table table-striped">
            <thead>
                <tr class="danger judul-kolom">
                    <th >No</th>
                    <th class="col-md-2">NRP</th>
                    <th class="col-md-4">Nama</th>
                    <th class="col-md-2">Nomor HP</th>
                    <th class="col-md-3 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($pendaftars as $index => $pendaftar)
                @if($index % 2==0)
                <tr>
                @else
                <tr class="warning">
                @endif
                    <td>{{$index+1}}</td>
                    <td>{{$pendaftar->nrp_maba}}</td>
                    <td>{{$data_pendaftar[$pendaftar->nrp_maba]['nama_maba']}}</td>
                    <td>{{$data_pendaftar[$pendaftar->nrp_maba]['nomor']}}</td>
                    <td class="text-center">
                        <a href="/admin/pendaftaran/profilpendaftar/{{$pendaftar->nrp_anggota}}" class="btn btn-sm btn-info   " style="margin: 0 10px;">Profil Pendaftar</a>
                        <a href="/admin/pendaftaran/{{$pendaftar->nrp_maba}}" class="btn btn-sm btn-primary">Detail Pendaftaran</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <br>
        <div class="row">
            <div class="hidden-sm hidden-xs">
                <div class="col-md-6">
                    <!-- Menampilkan <b> 5 {{-- {{$kelas->count()+($kelas->currentPage()-1)*$kelas->perPage()}} --}} dari {{-- {{$kelas->total()}} --}} 10 </b> data-->
                </div>
                <div class="col-md-6 text-right pagination">
                    {{-- {{ $kelas->links() }} --}}
                </div>
            </div>
            <div class="hidden-md hidden-lg">
                <div class="col-sm-12 text-center">
                    <!-- Menampilkan 5 <b>{{-- {{$kelas->count()+($kelas->currentPage()-1)*$kelas->perPage()}} --}} dari {{-- {{$kelas->total()}} --}} 10</b> data -->
                </div>
                <div class="col-sm-12 text-center pagination">
                    {{-- {{ $kelas->links() }} --}}
                </div>
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