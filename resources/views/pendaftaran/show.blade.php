@extends('layouts.main')

@section('title', 'Form Pendaftaran')

@section('title-content')
Detail Pendaftaran
@endsection

@section('breadcrumb')
<li><i class="fa fa-dashboard"></i> Home</a></li>
<li></i> Pendaftaran</a></li>
<li class="active"></i> Form Pendaftaran</a></li>
@endsection

@section('content')
<ul class="nav nav-pills">
    <li class=""><a href="/admin/pendaftaran"><i class="glyphicon glyphicon-align-justify"></i>Pendaftaran</a></li>
    <li class=""><a href="/admin/pendaftaran/diterima/"><i class="glyphicon glyphicon-align-justify"></i>List Diterima</a></li>
    <li class=""><a href="/admin/pendaftaran/create"><i class="glyphicon glyphicon-plus"></i>Form Pendaftaran</a></li>
    <li class="active"><a href="/admin/pendaftaran/{{$pendaftaran->nrp_maba}}">Detail Pendaftaran</a></li>
</ul>
<div class="box box-primary">
    <form class="form-horizontal" method="POST" action="{{str_replace('/create','',Request::url())}}">
        <div class="box-body" style="padding: 20px;">
            <div class="form-group">
                <label class="col-md-offset-1 col-md-2 control-label">NRP Pendaftar</label>
                <div class="col-md-7">
                    {{$pendaftaran->nrp_maba}}
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-offset-1 col-md-2 control-label">Kota Asal</label>
                <div class="col-md-7">
                    {{$pendaftaran->asal_form}}
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-offset-1 col-md-2 control-label">Nomor HP</label>
                <div class="col-md-7">
                    {{$pendaftaran->nomor_form}}
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-offset-1 col-md-2 control-label">ID Line</label>
                <div class="col-md-7">
                    {{$pendaftaran->id_line_form}}
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-offset-1 col-md-2 control-label">Hobi</label>
                <div class="col-md-7">
                    {{$pendaftaran->hobi_form}}
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-offset-1 col-md-2 control-label">Motivasi Mendaftar</label>
                <div class="col-md-7">
                    {{$pendaftaran->motivasi_form}}
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-offset-1 col-md-2 control-label">Prestasi</label>
                <div class="col-md-7">
                    {{$pendaftaran->prestasi_form}}
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-offset-1 col-md-2 control-label">Kesibukan</label>
                <div class="col-md-7">
                    {{$pendaftaran->kesibukan_form}}
                </div>
            </div>
            {{csrf_field()}}
            <div class="col-md-10 form-group">
                @if($pendaftaran->status_form == 0)
                    <a class="btn btn-success pull-right" href="{{url('/admin/pendaftaran')}}/terima/{{$pendaftaran->id_form}}" style="margin: 0 10px;">Terima Pendaftaran</a>
                @endif
                <a class="btn btn-default pull-right" href="{{url('/admin/pendaftaran')}}">Kembali</a>
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