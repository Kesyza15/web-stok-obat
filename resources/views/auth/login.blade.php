<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Klinik Pratama Hegar</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.min.css') }}">
</head>

<style>
  .btn-raised {
      transition: box-shadow 0.2s ease, transform 0.2s ease;
  }
  
  .btn-raised:active {
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
      transform: translateY(2px);
  }
</style>
  
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="{{ route('login') }}"><b>Klinik</b> Pratama Hegar</a>
  </div>
  <div class="card">
    <div class="card-body login-card-body">
      <h3 class="login-box-msg">{{ __('LOGIN') }}</h3>

      <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="input-group mb-3">
          <input id="username" type="text"
            class="form-control @error('username') is-invalid @enderror"
            name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
          @error('username')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <input type="hidden" id="level" name="level" value="admin">

        <div class="input-group mb-3">
          <input id="password" type="password"
            class="form-control @error('password') is-invalid @enderror"
            name="password" required autocomplete="current-password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
            <div class="input-group-text">
              <span class="fas fa-eye" id="toggle-password" style="cursor: pointer;"></span>
            </div>
          </div>
          @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <div class="row">
          <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block btn-raised">{{ __('Login') }}</button>
          </div>
        </div>      
      </form>

    </div>
  </div>
</div>

<script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('AdminLTE/dist/js/adminlte.min.js') }}"></script>

<script>
  $(document).ready(function(){
    $('#toggle-password').click(function(){
      const passwordField = $('#password');
      const type = passwordField.attr('type') === 'password' ? 'text' : 'password';
      passwordField.attr('type', type);
      $(this).toggleClass('fa-eye fa-eye-slash');
    });
  });
</script>
</body>
</html>
