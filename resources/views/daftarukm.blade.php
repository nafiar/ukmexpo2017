@extends('layoutuser.main')

@section('title')
Pengumuman
@endsection

@section('moreStyle')
@endsection

@section('content')
	<h2>Daftar UKM di ITS</h2>
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="row">
					<div class="col-md-3 panel panel-primary" style="padding: 10px; margin-left: 50px;">
						<div calss="panel-head">
							
						</div>
						<div clas="panel-body">
							<img class="img-responsive center" src="{{url('img/sepakbolaits.jpg')}}" style="max-width:250px; height: 250px; ;max-height: 250px;">
							<h5 class="">UKM Sepak Bola ITS</h5>
							<a class="btn btn-primary btn-block " href="/profilukm/">Lihat Profil Ukm</a>
						</div>
					</div>
					<div class="col-md-offset-1 col-md-3 panel panel-primary" style="padding: 10px;">
						<div calss="panel-head">
							
						</div>
						<div clas="panel-body">
							<img class="img-responsive" src="{{url('img/ukmmusikits.png')}}" style="max-width:250px; height: 250px; ;max-height: 250px;">
							<h5 class="pull-left">UKM Musik ITS</h5>
							<a class="btn btn-primary btn-block pull-right" href="">Lihat Profil Ukm</a>
							
						</div>
					</div>
					<div class="col-md-offset-1 col-md-3 panel panel-primary" style="padding: 10px;">
						<div calss="panel-head">
							
						</div>
						<div clas="panel-body">
							<img class="img-responsive" src="{{url('img/basketballits.png')}}" style="max-width:250px; height: 250px; max-height: 250px;">
							<h5 class="pull-left">UKM Bola Basket ITS</h5>
							<a class="btn btn-primary btn-block pull-right" href="">Lihat Profil Ukm</a>
							
						</div>
					</div>
					<div class="col-md-3 panel panel-primary" style="padding: 10px; margin-left: 50px;">
						<div calss="panel-head">
							
						</div>
						<div clas="panel-body">
							<img class="img-responsive center" src="{{url('img/kendoits.jpg')}}" style="max-width:250px; height: 250px; ;max-height: 250px;">
							<h5 class="">UKM Kendo ITS</h5>
							<a class="btn btn-primary btn-block " href="/profilukm/">Lihat Profil Ukm</a>
						</div>
					</div>
					<div class="col-md-offset-1 col-md-3 panel panel-primary" style="padding: 10px;">
						<div calss="panel-head">
							
						</div>
						<div clas="panel-body">
							<img class="img-responsive" src="{{url('img/billiardits.jpeg')}}" style="max-width:250px; height: 250px; ;max-height: 250px;">
							<h5 class="pull-left">UKM Billiard ITS</h5>
							<a class="btn btn-primary btn-block pull-right" href="">Lihat Profil Ukm</a>
							
						</div>
					</div>
					<div class="col-md-offset-1 col-md-3 panel panel-primary" style="padding: 10px;">
						<div calss="panel-head">
							
						</div>
						<div clas="panel-body">
							<img class="img-responsive" src="{{url('img/ukmpenalaranits.png')}}" style="max-width:250px; height: 250px; max-height: 250px;">
							<h5 class="pull-left">UKM Penalaran ITS</h5>
							<a class="btn btn-primary btn-block pull-right" href="">Lihat Profil Ukm</a>
							
						</div>
					</div>
				</div>

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

