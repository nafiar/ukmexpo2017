@extends('layouts.main')

@section('title', 'Profil UKM')

@section('title-content')
Edit Profil UKM
@endsection

@section('breadcrumb')
<li><i class="fa fa-dashboard"></i> Home</a></li>
<li></i> Profil UKM</a></li>
<li class="active"></i> Edit Profil UKM</a></li>
@endsection

@section('content')
<ul class="nav nav-pills">
    <li class=""><a href="/admin/profilukm"><i class="glyphicon glyphicon-align-justify"></i>Profil UKM</a></li>
    <li class="active"><a href="/admin/profilukm/{{session('user')['id_ukm_user']}}/edit/"><i class="glyphicon glyphicon-plus"></i>Edit Profil UKM</a></li>
</ul>
<div class="box box-primary">
    <form class="form-horizontal" method="POST" action="{{str_replace('/edit','',Request::url())}}">
        <div class="box-body" style="padding: 20px;">
            <div class="form-group">
                <label class="col-md-offset-1 col-md-2 control-label">Isi Profil</label>
                <div class="col-md-7">
                    <textarea type="textarea" name="isi_profil" class="form-control" placeholder="UKM Sepakbola ITS merupakan Unit Kegiatan yang menaungi mahasiswa ITS dalam bidang olahraga Sepakbola dan Futsal. Adanya UKM ini diharapkan dapat terus mengasah bakat-bakat mahasiswa kampus perjuangan hingga pada akhirnya dapat meraih prestasi non-akademik, khususnya di bidang olahraga Sepakbola dan Futsal."></textarea> 
                </div>
            </div>
            <div class="col-md-10 form-group">
                {{csrf_field()}}
                {{method_field('PUT')}}
                <!-- <button type="submit" class="btn btn-primary pull-right" style="margin: 0 10px;">Submit</button> -->
                <a style="margin: 0 10px;" href="/admin/profilukm" class="btn btn-primary pull-right">Submit</a>
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