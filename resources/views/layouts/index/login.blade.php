<div class="login-box login-centered">
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form role="form" method="POST" action="{{ url('/login') }}">
      {{ csrf_field() }}
      <div class="form-group {{ session('login') ? ' has-error' : '' }}">
        <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
        <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
        @if (session('login'))
        <span class="help-block">
          <strong>{{ session('login') }}</strong>
        </span>
        @endif
      </div>
      <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <!-- <span class="glyphicon glyphicon-lock form-control-feedback"></span> -->
        @if ($errors->has('password'))
        <span class="help-block">
          <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif
      </div>
      <div class="row">
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>

        <div class="col-xs-12">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
      </div>
    </form>

    <a href="{{ url('/password/reset') }}" class="text-center">Lupa Password?</a>
    <br>
    <a href="{{ url('/register') }}" class="text-center">Belum Punya Akun?</a>

  </div>
  <!-- /.login-box-body -->
</div>