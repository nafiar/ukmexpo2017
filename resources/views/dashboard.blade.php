@extends('layouts.main')

@section('title', 'Dashboard')

@section('title-content')
Home Admin
@endsection

@section('breadcrumb')
<li><i class="fa fa-dashboard"></i> Home</a></li>
@endsection

@section('content')
<div class="box box-primary">
    <div class="box-body">
        <div class="jumbotron">
            <div class="container text-center" style="background-color= #000000; margin-bottom: 30px;">
                <br><br>
                <h2 class="thin">Admin UKM</h2>
                <p class="text-muted">Selamat datang di halaman Admin UKM. Aplikasi ini digunakan untuk mengelola proses pendaftaran mahasiswa baru. Silahkan pilih Menu Pendaftaran untuk menambahkan pendaftar</p>
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