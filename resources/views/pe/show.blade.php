@extends('layouts.main')

@section('title', 'Dashboard')

@section('navtitle', 'Detail Kelas')

@section('title-content')
Kelas
@endsection

@section('breadcrumb')
<li><i class="fa fa-dashboard"></i> Home</a></li>
<li></i> Kelas</a></li>
<li class="active"></i> Show</a></li>
@endsection

@section('content')
<ul class="nav nav-pills">
  <li class=""><a href="/manajemensoal/kelas">List Kelas</a></li>
  <li class=""><a href="/manajemensoal/kelas/create">Daftar Baru</a></li>
  <li class="active"><a href="#">Show</a></li>
</ul>
<div class="box box-primary">
  <div class="box-body">
    <div class="row">
      <label class="col-sm-2 control-label">Kelas</label>
      <div class="col-sm-10 control-label">
        {{$kelas->namaKelas}}
      </div>
    </div>
    <br>
    <div class="row">
      <label class="col-sm-2 control-label">Jenjang</label>
      <div class="col-sm-10 control-label">
        {{$jenjang->namaJenjang}}
      </div>
    </div>
    <br>
    <div class="row">
      <label class="col-sm-2 control-label">Penjurusan</label>
      <div class="col-sm-10 control-label">
        {{$kelas->penjurusanKelas}}
      </div>
    </div>

    <!-- /.box-body -->
    <div class="box-footer text-right">
      <form id="hapus">
        <a href="/manajemensoal/kelas/{{$kelas->idKelas}}/edit" class="btn btn-primary">Edit</a>
      </form>
    </div>
  </div>
  <!-- /.box-footer -->
</div>
@endsection


@section('js')

@endsection
