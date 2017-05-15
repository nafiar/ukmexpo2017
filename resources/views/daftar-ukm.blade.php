@extends('layoutuser.main')

@section('title')
Daftar UKM
@endsection

@section('moreStyle')
@endsection

@section('content')
	<h2>Daftar UKM di ITS</h2>
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="row">
					@foreach($ukms as $key => $ukm)
						@if($key%3 == 0)
							<div class="col-md-3 panel panel-primary" style="padding: 10px; margin-left: 50px;">	
						@else
							<div class="col-md-offset-1 col-md-3 panel panel-primary" style="padding: 10px;">						
						@endif
								<div calss="panel-head">
									
								</div>
								<div clas="panel-body">
									<div style="height: 250px; width: 250px;">
										<img class="img-responsive center" src="img/{{$ukm->foto_ukm}}" style="min-width: 100px; min-height: 100px; max-width:250px; max-height: 250px; margin-left: auto; margin-right: auto; vertical-align: middle;">
									</div>
									<h5 class="">{{$ukm->nama_ukm}}</h5>
									<a class="btn btn-primary btn-block " href="/profilukm/{{$ukm->id_ukm}}">Lihat Profil Ukm</a>
								</div>
							</div>										
					@endforeach
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

