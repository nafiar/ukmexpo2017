@extends('layoutuser.main')

@section('title')
Home
@endsection

@section('moreStyle')
@endsection

@section('content')
	<div class="gambar-home" style="background-image: url({{asset('img/ukmexpo.jpg')}}); margin-top: 30px; margin-left: 30px;height: 600px; max-height: 100%; width: 95%; max-width: 100%;">
		
	</div>
	<div class="jumbotron" style="margin-top: 70px; margin-bottom: 160px;">
		<h1>UKM EXPO ITS 2017</h1>
		<p>Mempersembahkan Metode Pameran Unit Kegiatan Mahasiwa yang Revolusioner dan Pertama kalinya di ITS yaitu dengan metode yang Paperless</p>
		<a class="btn btn-primary" href="" >Tentang Kami</a>
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

