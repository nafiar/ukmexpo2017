@extends('layouts.main')

@section('title', 'Dashboard')

@section('navtitle', 'Kelas')

@section('title-content')
Kelas
@endsection

@section('breadcrumb')
<li><i class="fa fa-dashboard"></i> Home</a></li>
<li></i> Kelas</a></li>
<li class="active"></i> List Kelas</a></li>
@endsection

@section('content')
<ul class="nav nav-pills">
    <li class="active"><a href="/manajemensoal/kelas">List Kelas</a></li>
    <li class=""><a href="/manajemensoal/kelas/create">Tambah Kelas</a></li>
</ul>
<div class="box box-primary">
    <div class="box-body">
        <table id="tableKelas" class="table table-striped">
            <thead>
                <tr class="judul-kolom">
                    <th >No</th>
                    <th class="col-md-3">Kelas</th>
                    <th class="col-md-4">Jenjang</th>
                    <th class="col-md-4">Penjurusan</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($kelass as $index => $kelas)
                <tr>
                    <td>{{$index+1}}</td>
                    <td>{{$kelas->namaKelas}}</td>
                    <td>{{$kelas->jenjang->namaJenjang}}</td>
                    <td>{{$kelas->penjurusanKelas}}</td>
                    <td class="text-center">
                        <a href="/manajemensoal/kelas/{{$kelas->idKelas}}" class="btn btn-sm btn-primary">Detail</a>
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