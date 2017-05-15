<!DOCTYPE html>
<html lang="id" ng-app="rsua">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin | @yield('title')</title>
	<link rel="icon" type="image/png" href="{{asset('img/logoukmexpo.png')}}">
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.6 -->
	<link rel="stylesheet" href="{{asset('bower_components/AdminLTE/bootstrap/css/bootstrap.min.css')}}">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
	<!-- Ionicons -->
	<link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
	<!-- jvectormap -->
	<link rel="stylesheet" href="{{asset('bower_components/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
		<link rel="stylesheet" href="{{asset('bower_components/datatables/media/css/jquery.dataTables.min.css')}}">
	<link rel="stylesheet" href="{{asset('bower_components/datatables/media/css/dataTables.bootstrap.min.css')}}">
	<!-- <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrappaper.css')}}"> -->
	<style type="text/css">
		@font-face {
			font-family: Hanacaraka;
			src: url('{{ asset('/fonts/Hanacaraka.TTF') }}') format('truetype');
			font-weight: normal;
			font-style: normal;
		}
	</style>
	<!-- AdminLTE -->
	<link rel="stylesheet" href="{{asset('bower_components/AdminLTE/dist/css/AdminLTE.min.css')}}">
	<link rel="stylesheet" href="{{asset('bower_components/AdminLTE/dist/css/skins/skin-blue-light.min.css')}}">
	<!-- sweetalert -->
	<link rel="stylesheet" href="{{asset('bower_components/sweetalert/dist/sweetalert.css')}}">

	<!-- Custom layout -->
	<link rel="stylesheet" href="{{asset('css/custom.css')}}">
	@yield('css')
	<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.2/less.min.js" type="text/javascript"></script>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body class="hold-transition skin-blue-light sidebar-mini">
<div class="wrapper">
	@include('layouts.header')
	@include('layouts.sidebar')
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				@yield('title-content')
			</h1>
			<ol class="breadcrumb">
				@yield('breadcrumb')
			</ol>
		</section>
		<section class="content">
			@yield('content')
		</section>
	</div>
	@include('layouts.footer')
</div>
<script src="{{asset('bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{asset('bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<script src="{{asset('bower_components/AdminLTE/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('bower_components/datatables/media/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('bower_components/AdminLTE/plugins/fastclick/fastclick.js')}}"></script>
<script src="{{asset('bower_components/AdminLTE/dist/js/app.min.js')}}"></script>
<script src="{{asset('bower_components/AdminLTE/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('bower_components/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('bower_components/AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{asset('bower_components/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- <script type="text/javascript" src="{{asset('js/bootstrappaper.js')}}"></script> -->
<script src="{{asset('bower_components/sweetalert/dist/sweetalert.min.js')}}"></script>
<script src="{{ URL::asset('/bower_components/tinymce/tinymce.min.js') }}" type="text/javascript" ></script>
<script>
	$(function() {
		$(document).on("keypress", ":input:not(textarea)", function(event) {
			return event.keyCode != 13;
		});
	});
</script>
@yield('js')
</body>
</html>