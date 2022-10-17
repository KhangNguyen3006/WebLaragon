<html lang="en"><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{$title}}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('template/admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('template/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('template/admin/dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{asset('template/admin/dist/css/login.css')}}">
</head>
<body>
<div class="login-box">
  <div class="login-logo text-light">
    <h2>{{$title}}</h2>
  </div>

  @if(session('success'))
  <div class="alert alert-danger">
  	{{session('success')}}
  </div>
  @endif

  @if ($errors->any())
  	<div class="alert alert-danger">
  		<ul>
  			@foreach ($errors->all() as $error)
  			<li>{{$error}}</li>
  			@endforeach
  		</ul>
  	</div>
  	@endif

  <!-- /.login-logo -->
      <form action="/dologin" method="post">
      	@csrf
          <div class="user-box">
            <input type="email" name="email">
            <label>Email</label>
          </div>
          <div class="user-box">
            <input type="password" name="password">
            <label>Password</label>
          </div>
          <div class="user-box">
            <input type="checkbox" id="remember" name=remember>
            <label for="remember">Remember Me</label>
          </div>
          <button type="submit">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Sign In
          </button>
        </form>
        </div>

      
      <!-- /.social-auth-links -->

      
      
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>


</body>
</html>