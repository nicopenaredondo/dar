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
	{{ HTML::style('assets/stylesheets/login.css') }}
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">
</head>
<body>
	<!--START_HEADER-->
	@yield('container')
	<!--END_HEADER-->
    <!--START_FOOTER-->
  	<!--END_FOOTER-->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js" type="text/javascript"></script>
  @yield('scripts')

</body>
</html>