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
    <li class=""><a href="/admin/daftaranggota/create"><i class="glyphicon glyphicon-plus"></i>Tambah Anggota</a></li>
    <li class="active"><a href="/admin/daftaranggota/create"><i class="glyphicon glyphicon-plus"></i>Show</a></li>
</ul>
<div class="box box-primary">
    <form class="form-horizontal" method="POST" action="{{str_replace('/create','',Request::url())}}">
        <div class="box-body" style="padding: 20px;">
            <div class="form-group">
                <label class="col-md-offset-1 col-md-2 control-label">NRP Anggota</label>
                <div class="col-md-7">
                    {{$anggota->nrp_anggota}}
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-offset-1 col-md-2 control-label">Nama Anggota</label>
                <div class="col-md-7">
                    {{$anggota->nama_anggota}}
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-offset-1 col-md-2 control-label">Jabatan Anggota</label>
                <div class="col-md-7">
                    {{$anggota->jabatan_anggota}}
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-offset-1 col-md-2 control-label">Tingkat Jabatan</label>
                <div class="col-md-7">
                    @if($anggota->hirarki_anggota == 1)
                        Ketua
                    @elseif($anggota->hirarki_anggota == 2)
                        Pengurus Inti Non Divisi
                    @elseif($anggota->hirarki_anggota == 3)
                        Pengurus Inti
                    @elseif($anggota->hirarki_anggota == 4)
                        Pengurus / Anggota / Staff
                    @endif
                </div>
            </div>
            {{csrf_field()}}
            <div class="col-md-10 form-group">
                <a class="btn btn-primary pull-right" href="{{url('/admin/daftaranggota')}}/{{$anggota->nrp_anggota}}/edit" style="margin: 0 10px;">Edit</a>
                <a type="" class="btn btn-default pull-right" href="{{url('/admin/daftaranggota')}}" style="margin-rig: 10px;">Kembali</a>
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