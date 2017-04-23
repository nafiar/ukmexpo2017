<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Panitia Ukm Expo</title>
    <link rel="icon" type="image/png" href="{{asset('img/sby.png')}}">
    <link href="{{ URL::asset('bower_components/AdminLTE/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('css/login.css') }}" rel="stylesheet"/>	
    <link href="{{ URL::asset('css/custom.css') }}" rel="stylesheet"/>
</head>
<body>
    <div id="login-container">
        <div >
            <div id="" class="col-md-4 col-md-offset-4 panel panel-default" style="padding: 0px;">
                <div class="panel-heading">
                    <strong>Login Panitia</strong>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="control-label col-sm-3">Username</label>
                            <div class="col-sm-7 col-sm-offset-1">
                                <input type="text" class="form-control" id="inputUsername" name="username" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Password</label>
                            <div class="col-sm-7 col-sm-offset-1">
                                <input type="password" class="form-control" id="inputUsername" name="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-7">
                                <button class="btn btn-success btn-block">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
    <script src="{{asset('bower_components/AdminLTE/bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>