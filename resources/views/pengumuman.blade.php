@extends('layoutuser.main')

@section('title')
Pengumuman
@endsection

@section('moreStyle')
@endsection

@section('content')
	<div class="col-md-8 col-md-offset-2 pengumuman">
		<div class="panel panel-default panel-form">
			<div class="panel-body">				
				<h4><strong>Data Mahasiswa :</strong></h4>
				<p>Nama : {{$mahasiswa_baru->nama_maba}}</p>
				<p>NRP 	: {{$mahasiswa_baru->nrp_maba}}</p>
				<p>Jurusan	: {{$mahasiswa_baru->jurusan_maba}}</p>
				<hr>
				@if ($ukms)
					<h4 style="text-align: center;"><strong>Selamat Kamu sudah diterima di ukm :</strong></h4>
					@foreach ($ukms as $key => $ukm)
						<p>{{$key+1}}. {{$ukm['nama_ukm']}}</p>
					@endforeach
				@else
					<h4 style="text-align: center;"><strong>Kamu Masih Belum Diterima di UKM Manapun<br>Tetap Semangat</strong></h4>
				@endif
			</div>
		</div>		
	</div>
	<div class="col-md-offset-5 col-md-2" style="margin-bottom: 50px;">
		<a class="btn btn-primary btn-block" href="{{url('/home')}}">Kembali Ke Home</a>
	</div>
		
@endsection

@section('moreScript')
<script type="text/javascript">
	$('#datepicker').onClick(function(){
		console.log("bisa kok");
	});
	$('#timepicker').datepicker({
		datepicker:false,
		format:'H:i'
	});
	$('#datepicker').datepicker({

	});
</script>
@endsection
