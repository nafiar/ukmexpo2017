@extends('layouts.main')


@section('title', 'Dashboard')

@section('navtitle', 'Tambah Kelas')

@section('title-content')
Kelas
@endsection

@section('breadcrumb')
<li><i class="fa fa-dashboard"></i> Home</a></li>
<li></i> Kelas</a></li>
<li class="active"></i> Daftar Kelas</a></li>
@endsection

@section('content')
<ul class="nav nav-pills">
  <li class=""><a href="/manajemensoal/kelas">List Kelas</a></li>
  <li class="active"><a href="/manajemensoal/kelas/create">Daftar Baru</a></li>
</ul>
<div class="box box-primary">
  <form class="form-horizontal" method="POST" action="{{str_replace('/create','',Request::url())}}">
    <div class="box-body">
      <div class="form-group">
        <label class="col-sm-2 control-label">Kelas</label>
        <div class="col-sm-4">
          <input type="text" name="namaKelas" class="form-control" placeholder="Kelas">
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
          <input type="text" name="penjurusanKelas" class="form-control" placeholder="Penjurusan Kelas">
        </div>
      </div>
    </div>  
    <!-- /.box-body -->
    <div class="box-footer text-right">
      <button type="submit" class="btn btn-default ">Batal</button>
      <button type="submit" class="btn btn-primary ">Simpan</button>
    </div>
    <!-- /.box-footer -->
    {{csrf_field()}}
    {{method_field('POST')}}
  </form>
</div>
@endsection

@section('js')

@endsection
