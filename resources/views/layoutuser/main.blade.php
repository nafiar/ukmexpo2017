<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>
	<link rel="icon" type="image/png" href="{{asset('img/logoukmexpo.png')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrappaper.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/papercustom.min.css')}}">
	<script type="text/javascript" src="{{asset('js/bootstrappaper.min.js')}}"></script>
	<script type="text/javascript" async="" src="{{asset('js/ga.js')}}"></script>
	<!-- Custom layout -->
	<link rel="stylesheet" href="{{asset('css/custom.css')}}">
	@yield('moreStyle')
</head>
<body>
<div>
	@include('layoutuser.header')
	<div class="container">
		@yield('content')
	</div>
	@include('layoutuser.footer')
</div>
<script type="text/javascript" src="{{asset('js/custompaper.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery-2.2.3.min.js')}}"></script>
@yield('moreScript')
</body>
</html>