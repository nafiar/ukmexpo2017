@extends('layouts.main')

@section('title', 'Pengumuman UKM')

@section('title-content')
Tambah Pengumuman UKM
@endsection

@section('breadcrumb')
<li><i class="fa fa-dashboard"></i> Home</a></li>
<li></i> Pengumuman UKM</a></li>
<li class="active"></i> Tambah Pengumuman UKM</a></li>
@endsection

@section('content')
<ul class="nav nav-pills">
    <li class=""><a href="/admin/pengumumanukm"><i class="glyphicon glyphicon-align-justify"></i>Pengumuman UKM</a></li>
    <li class="active"><a href="/admin/pengumumanukm/create"><i class="glyphicon glyphicon-plus"></i>Tambah Pengumuman UKM</a></li>
</ul>
<div class="box box-primary">
    <form class="form-horizontal" method="POST" action="{{str_replace('/create','',Request::url())}}">
        <div class="box-body" style="padding: 20px;">
            <div class="form-group">
                <label class="col-md-offset-1 col-md-2 control-label">Judul Pengumuman</label>
                <div class="col-md-7">
                    <input type="text" name="judul_pengumuman" class="form-control" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-offset-1 col-md-2 control-label">Isi Pengumuman</label>
                <div class="col-md-7">
                    <textarea type="textarea" name="isi_pengumuman" class="form-control" placeholder=""></textarea> 
                </div>
            </div>
            <div class="col-md-10 form-group">
                {{csrf_field()}}
                {{method_field('POST')}}
                <button type="submit" class="btn btn-primary pull-right" style="margin: 0 10px;">Submit</button>
                <!-- <a href="/admin/pengumumanukm" class="btn btn-primary pull-right" style="margin: 0 10px;">Submit</a> -->
                <a type="" class="btn btn-default pull-right" href="{{url('/admin/daftaranggota')}}" style="margin: 0 10px;">Batal</a>
            </div>
        </div> 
    </form>
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