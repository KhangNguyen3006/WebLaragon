<html lang="en" style="height: auto;"><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TRANG ADMIN</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('template/admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="{{asset('template/admin/plugins/ekko-lightbox/ekko-lightbox.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('template/admin/dist/css/adminlte.min.css')}}">
</head>
<body class="sidebar-mini" style="height: auto;">
<div class="wrapper">
    <!-- Preloader -->

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/admin/" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/admin/login" class="nav-link">LogIn</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/admin/registeradmin" class="nav-link">Register</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <div class="dropdown-divider"></div>
        </div>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/admin/logout" class="nav-link">Logout</a>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>


    </ul>
  </nav>
  <!-- /.navbar -->