@extends('layoutuserukm.main')

@section('title')
Daftar Anggota {{session('ukm')['nama_ukm']}}
@endsection

@section('moreStyle')
@endsection

@section('content')
	<div class="panel col-md-10 col-md-offset-1" style="margin-top: 60px; margin-bottom: 110px; padding: 30px 50px;">
		<h4 style="text-align: center;">Berikut Daftar Keanggotaan {{session('ukm')['nama_ukm']}}</h4>
		<table class="table table-striped table-hover " style="margin-top: 20px; margin-bottom: 20px;">
			<thead>
				<tr class="danger">
				  <th class="col-md-1" style="text-align: center;">No.</th>
				  <th class="col-md-3" style="text-align: center;">NRP</th>
				  <th class="col-md-5" style="text-align: center;">Nama</th>
				  <th class="col-md-3" style="text-align: center;">Jabatan</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($anggotas as $key => $anggota)
					@if($key%2 == 0)
						<tr>
					@else
						<tr class="warning">
					@endif
						<td class="col-md-1" style="text-align: center;">{{$key+1}}</td>
						<td class="col-md-3">{{$anggota->nrp_anggota}}</td>
						<td class="col-md-5">{{$anggota->nama_anggota}}</td>
						<td class="col-md-3">{{$anggota->jabatan_anggota}}</td>
					</tr>
				@endforeach
			</tbody>
		</table> 
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

