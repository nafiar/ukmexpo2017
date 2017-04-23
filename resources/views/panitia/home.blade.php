<!DOCTYPE html>
<html>
	<head>
		<title>Halaman Home</title>
		<link rel="icon" type="image/png" href="a">
		<link href="{{ URL::asset('bower_components/AdminLTE/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"/>
		<link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet"/>
	</head>
	<body>
		

		
		<div >
			<img class="home-image" src="{{URL::asset('img/ukmexpo.jpg')}}">
			<div class="text-center btn-menu" style="padding: 20px; background-color: #b9ecf7;">
				<a href="#" class="col-md-2 btn-dihome btn btn-lg btn-info">About Us</a>
				<a href="#" class="col-md-2 btn-dihome btn btn-lg btn-info">Daftar Ukm</a>
				<a href="#" class="col-md-2 btn-dihome btn btn-lg btn-info">Guides</a>
			</div>
			
		</div>
		
		<div style="background-color: #3e3e3e; margin-top: 50px; padding:50px;">
			<div class="container">
				<form class="form-horizontal">
						<div class="form-group ">
							<input class="input-lg form-control"type="text" placeholder="NRP">
							<button class="btn btn-lg btn-info">Cari</button>
						</div>
				</form>
			</div>
		</div>
		

		<script src="{{asset('bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
	    <script src="{{asset('bower_components/AdminLTE/bootstrap/js/bootstrap.min.js')}}"></script>
	    <script type="text/javascript">
	    	$(window).scroll(function() {
			    if($(this).scrollTop() > 50)  /*height in pixels when the navbar becomes non opaque*/ 
			    {
			        $('.opaque-navbar').addClass('opaque');
			    } else {
			        $('.opaque-navbar').removeClass('opaque');
			    }
			});
	    </script>
	</body>
</html>