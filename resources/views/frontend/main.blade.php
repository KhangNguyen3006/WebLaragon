<?php
use App\View\Components\frontend\CategoryMenu; 
use App\View\Components\frontend\TopLink; 
use App\View\Components\frontend\SlideShow;
?>

<html lang="en"><head>
    <meta charset="utf-8">
    <title>Technology Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

	
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="{{asset('template/frontend/themes/bootshop/bootstrap.min.css')}}" media="screen">
    <link href="{{asset('template/frontend/themes/css/base.css')}}" rel="stylesheet" media="screen">
<!-- Bootstrap style responsive -->	
	<link href="{{asset('template/frontend/themes/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
	<link href="{{asset('template/frontend/themes/css/font-awesome.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('template/frontend/themes/css/socialshare.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('template/frontend/themes/css/register.css')}}"  rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="{{asset('template/frontend/themes/js/google-code-prettify/prettify.css')}}" rel="stylesheet">
	<link href="{{asset('template/frontend/themes/css/dropdown.css')}}"  rel="stylesheet" type="text/css">
	<!-- <link href="{{asset('template/frontend/themes/css/inforcustomer.css')}}"  rel="stylesheet" type="text/css"> -->

<!-- fav and touch icons -->
    <link rel="shortcut icon" href="{{asset('template/frontend/themes/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('template/frontend/themes/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('template/frontend/themes/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('template/frontend/themes/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('template/frontend/themes/images/ico/apple-touch-icon-57-precomposed.png')}}">
	<style type="text/css" id="enject"></style>
  </head>
<body>
<div id="header">
<div class="container">
<div id="welcomeLine" class="row">

	<x-frontend.viewcart />

	</div>
</div>
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">

  <div class="navbar-inner">
    <a class="brand" href="/"><img src="{{asset('template/frontend/themes/images/logonano.jpg')}}" alt="Bootsshop"></a>
		<form action="/search" class="form-inline navbar-search" method="post">
		@csrf
            <input name="key" id="key" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-success btn-sm" type="submit">Search</button>
        </form>

     <x-frontend.TopLink/>
  </div>
</div>
</div>
</div>
<!-- Header End====================================================================== -->
<x-frontend.SlideShow />
<div id="mainBody">
	<div class="container">
	<div class="row">

<!-- Sidebar ================================================== -->
<div id="sidebar" class="span3">	
	<x-frontend.CategoryMenu/>
	<x-frontend.BrandMenu/>
</div>
<!-- Sidebar end=============================================== -->
		<div class="span9">		
			
			@yield('noidung')	
			  	
		</div>
		</div>
	</div>
</div>
<!-- Footer ================================================================== -->
	<div id="footerSection">
	<div class="container">
		<div class="row">
			<x-frontend.bottom-link pos=3/>
			<x-frontend.bottom-link pos=4/>
			<x-frontend.bottom-link pos=5/>
		<div class="row">
				<div id="social-share" class=" span3 pull-right">
					<div class="social-share-item facebook">
						<i class="fab fa-facebook social-share-icon"></i>
						<span class="social-share-text">Share this post on Facebook</span>
					</div>
					<div class="social-share-item instagram">
						<i class="fab fa-instagram social-share-icon"></i>
						<span class="social-share-text">Share this post on Instagram</span>
					</div>
					<div class="social-share-item twitter">
						<i class="fab fa-twitter social-share-icon"></i>
						<span class="social-share-text">Share this post on Twitter</span>
					</div>
		</div>
        </div>
		 </div>
	</div><!-- Container End -->
	</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="{{asset('template/frontend/themes/js/jquery.js')}}" type="text/javascript"></script>
	<script src="{{asset('template/frontend/themes/js/bootstrap.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('template/frontend/themes/js/google-code-prettify/prettify.js')}}"></script>
	<script src="https://kit.fontawesome.com/fb3aa5052d.js" crossorigin="anonymous"></script>
	<script src="{{asset('template/frontend/themes/js/bootshop.js')}}"></script>
    <script src="{{asset('template/frontend/themes/js/jquery.lightbox-0.5.js')}}"></script>
	
	<!-- Themes switcher section ============================================================================================= -->
<div id="secectionBox">
<link rel="stylesheet" href="{{asset('template/frontend/themes/switch/themeswitch.css')}}" type="text/css" media="screen">
<script src="{{asset('template/frontend/themes/switch/theamswitcher.js')}}" type="text/javascript" charset="utf-8"></script>
	

</div>
<span id="themesBtn"></span>

</body></html>