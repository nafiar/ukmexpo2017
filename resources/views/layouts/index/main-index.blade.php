<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Manajemen Soal | @yield('title')</title>
  <link rel="shortcut icon" type="image/png" href="{{asset("images/puspendik.ico")}}"/>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{asset('bower_components/AdminLTE/bootstrap/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('bower_components/AdminLTE/dist/css/AdminLTE.css')}}">
  <link rel="stylesheet" href="{{asset('css/custom.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('bower_components/AdminLTE/plugins/iCheck/square/blue.css')}}">
</head>
<body class="hold-transition login-page">
  <div class="container">
    <div class="row">
      <div class="col-md-9 index-content">
        <h1><img src="{{asset("images/logo.png")}}" height="50px" style="margin-right: 10px">RSU Aisyiyah Muhammadiyah Padang</h1>
        @yield('content')
      </div>
      <div class="col-md-3">
        @include('layouts.index.login')
      </div>
    </div>
  </div>
  <!-- jQuery 2.2.3 -->
  <script src="{{asset('bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="{{asset('bower_components/AdminLTE/bootstrap/js/bootstrap.min.js')}}"></script>
  <!-- iCheck -->
  <script src="{{asset('bower_components/AdminLTE/plugins/iCheck/icheck.min.js')}}"></script>
  <script>
    $(function () {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
      });
    });
  </script>
</body>
</html>