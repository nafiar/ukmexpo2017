@extends('layoutuserukm.main')

@section('title')
Pengumuman {{session('ukm')['nama_ukm']}}
@endsection

@section('moreStyle')
@endsection

@section('content')
	<div class="panel col-md-12" style="margin-top: 30px; margin-bottom: 240px; padding: 20px;">	
		<div class="panel panel-primary ">
			<div class="panel-heading">
				<h3>{{$pengumuman->judul_pengumuman}}</h3>	
			</div>
			<div class="panel-body">
				<h4>{{$pengumuman->isi_pengumuman}}</h4>
				<br>
				
			</div>				
		</div>
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

