@extends('layouts.main')

@section('title', 'Daftar Anggota')

@section('title-content')
Tambahkan Anggota
@endsection

@section('breadcrumb')
<li><i class="fa fa-dashboard"></i> Home</a></li>
<li></i> Daftar Anggota</a></li>
<li class="active"></i> List Anggota</a></li>
@endsection

@section('content')
<ul class="nav nav-pills">
    <li class=""><a href="/admin/daftaranggota"><i class="glyphicon glyphicon-align-justify"></i>List Anggota</a></li>
    <li class=""><a href="/admin/pendaftaran/diterima/"><i class="glyphicon glyphicon-align-justify"></i>List Diterima</a></li>
    <li class=""><a href="/admin/daftaranggota/create"><i class="glyphicon glyphicon-plus"></i>Tambah Anggota</a></li>
    <li class="active"><a href="/admin/daftaranggota/create"><i class="glyphicon glyphicon-plus"></i>Edit</a></li>
</ul>
<div class="box box-primary">
    <form class="form-horizontal" method="POST" action="{{str_replace('/create','',Request::url())}}">
        <div class="box-body" style="padding: 20px;">
            <div class="form-group">
                <label class="col-md-offset-1 col-md-2 control-label">NRP Anggota</label>
                <div class="col-md-7">
                    <input type="text" name="nrp_anggota" class="form-control" placeholder="{{$anggota->nrp_anggota}}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-offset-1 col-md-2 control-label">Nama Anggota</label>
                <div class="col-md-7">
                    <input type="text" name="nama_anggota" class="form-control" placeholder="{{$anggota->nama_anggota}}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-offset-1 col-md-2 control-label">Jabatan Anggota</label>
                <div class="col-md-7">
                    <input type="text" name="jabatan_anggota" class="form-control" placeholder="{{$anggota->jabatan_anggota}}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-offset-1 col-md-2 control-label">Tingkat Jabatan</label>
                <div class="col-md-7">
                    <select id="hirarki" name="hirarki_anggota" class="form-control">
                        <option value="1" @if($anggota->hirarki_anggota == 1) selected="selected" @endif>Ketua</option>
                        <option value="2" @if($anggota->hirarki_anggota == 2) selected="selected" @endif>Pengurus Inti Non Divisi</option>
                        <option value="3" @if($anggota->hirarki_anggota == 3) selected="selected" @endif>Pengurus Inti</option>
                        <option vlaue="4" @if($anggota->hirarki_anggota == 4) selected="selected" @endif>Pengurus / Anggota / Staff</option>
                    </select>
                </div>
            </div>
            <div class="col-md-10 form-group">

                <button type="submit" class="btn btn-primary pull-right" style="margin: 0 10px;">Submit</button>
                <a type="" class="btn btn-default pull-right" href="{{url('/admin/daftaranggota')}}" style="margin-rig: 10px;">Batal</a>
                {{method_field('PUT')}}
                {{csrf_field()}}
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