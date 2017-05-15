@extends('layoutuser.main')

@section('title')
Pengumuman
@endsection

@section('moreStyle')
@endsection

@section('content')
	<div class="col-md-8 col-md-offset-2 carinrp">
		<div class="panel panel-default panel-form">
			<div class="panel-body">
				<form class="form-horizontal" method="POST" action="{{url('carinrp')}}">
					<div class="row">
						<div class="waktu-jadwal">
							<h4 class="control-label" for="focusedInput" style="text-align: center;">Masukkan NRPmu !</h4>
							<div class=" col-md-offset-1 col-md-10 row" style="margin-top: 30px;">
								<input class=" col-md-9" id="focusedInput" type="text" placeholder="NRP" name="nrp">
								<button class=" col-md-offset-1 col-md-2 btn btn-primary pull-right" type="submit" >Cari</button>
							</div>
							{{csrf_field()}}
						</div>
					</div>
				</form>
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

