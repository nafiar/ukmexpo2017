<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="{{asset('img/logoukmexpo.png')}}">
    <title>Login Admin UKM</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('SI-ADMIN/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{asset('SI-ADMIN/vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
   <!--  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->

    <!-- Open Sans -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="background-color: #F3F3F3; font-family: Open Sans">

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <center><img style="padding-bottom:0" src= "{{asset('img/logoukmexpo.png')}}" width="60%"></center>
            </div>
            <div class="col-md-6 col-md-offset-3">
                <div style="margin-top:0" class="login-panel panel panel-default">
                    
                    <div  class="panel-heading">
                        <center><h3 class="panel-title">Login</h3></center>
                    </div>
                    <div class="panel-body">
                        @if ($errors->count()>0)
                            <div class="alert alert-danger" >
                                @foreach ($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            </div>
                        @endif
                        @if (Session::get('message'))
                            <div class="alert alert-success"> <!-- style="color:white; background-color: green; font-weight:bold; padding: 0.5em" -->
                               {{Session::get('message')}}
                            </div>
                        @endif
                        <form role="form" method="POST" action="{{url('/login')}}">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                {{csrf_field()}}
                                <!-- Change this to a button or input when using this as a form -->
                                <button style="margin-bottom:3%" type="submit" class="btn btn-lg btn-primary btn-block">Login</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('SI-ADMIN/vendor/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('SI-ADMIN/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset('SI-ADMIN/vendor/metisMenu/metisMenu.min.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{asset('SI-ADMIN/dist/js/sb-admin-2.js')}}"></script>

</body>

</html>
