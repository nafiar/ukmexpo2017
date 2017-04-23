@extends('layouts.main')

@section('title', 'Dashboard')

@section('navtitle', 'Edit Kelas')

@section('title-content')
Kelola Data Kelas
@endsection

@section('breadcrumb')
<li><i class="fa fa-dashboard"></i> Home</a></li>
<li></i> Kelas</a></li>
<li class="active"></i> Edit</a></li>
@endsection

@section('content')
<ul class="nav nav-pills">
  <li class=""><a href="/manajemensoal/kelas">List Kelas</a></li>
  <li class=""><a href="/manajemensoal/kelas/create">Daftar Baru</a></li>
  <li class=""><a href="/manajemensoal/kelas/{{$kelas->idKelas}}">Show</a></li>
  <li class="active"><a href="#">Edit</a></li>
</ul>
<div class="box box-primary">
  <form class="form-horizontal" action="/manajemensoal/kelas/{{$kelas->idKelas}}" method="POST">
    <div class="box-body">
      <div class="form-group">
        <label class="col-sm-2 control-label">Kelas</label>
        <div class="col-sm-4">
          <input type="text" name="namaKelas" class="form-control" placeholder="{{$kelas->namaKelas}}">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Jenjang</label>
        <div class="col-sm-4">
          <select id"namaJenjang" name="namaJenjang" class="form-control">
            @foreach ($jenjangs as $jenjang)
              <option value="{{$jenjang->namaJenjang}}">{{$jenjang->namaJenjang}}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Penjurusan</label>
        <div class="col-sm-4">
          <input type="text" name="penjurusanKelas" class="form-control" placeholder="{{$kelas->penjurusanKelas}}">
        </div>
      </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer text-right">
      <a href="{{URL::previous()}}" class="btn btn-default">Batal</a>
      <button type="submit" class="btn btn-primary ">Simpan</button>
    </div>
    <!-- /.box-footer -->
    {{ csrf_field()}}
    {{ method_field('PUT') }}
  </form>
</div>
@endsection


@section('js')
<script>
 
</script>
@endsection
