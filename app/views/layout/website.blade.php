<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	{{ HTML::style('assets/stylesheets/bootstrap.css') }}
	<!--START CDN HERE-->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">
	<!--END CDN HERE-->
	@yield('styles')
	<link rel="icon" href="favicon.ico" type="image/x-icon"/>
</head>
<body>
	<!-- Full Page Image Header Area -->
   @yield('header')
    <!-- /Full Page Image Header Area -->
    
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js" type="text/javascript"></script>
  @yield('scripts')
</body>
</html>