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
	{{ HTML::style('assets/stylesheets/dar.css') }}
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">
</head>
<body>
	<div id="wrapper">
	 	<!-- Sidebar and Topbar -->
      	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	        <!-- Brand and toggle get grouped for better mobile display -->
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="index.html">Highly Succeed Ltd.</a>
	        </div>

	        <!-- Collect the nav links, forms, and other content for toggling -->
	        <div class="collapse navbar-collapse navbar-ex1-collapse">
	          <ul class="nav navbar-nav side-nav">
	            <li class="active"><a href="{{ URL::route('dashboard') }}"><i class="icon-dashboard" style="margin-right:5px;"></i> Dashboard</a></li>
	            <li><a href="{{ URL::route('reports') }}"><i class="icon-file" style="margin-right:5px;"></i> My DAR</a></li>
	            <li><a href="{{ URL::route('settings') }}"><i class="icon-cogs" style="margin-right:5px;"></i>Settings</a></li>
	           </ul>

	          <ul class="nav navbar-nav navbar-right navbar-user">
	            <li class="dropdown user-dropdown">
	              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
	              <ul class="dropdown-menu">
	               	<li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
	              </ul>
	            </li>
	          </ul>
	        </div><!-- /.navbar-collapse -->
      	</nav>
		<!-- Sidebar and Topbar-->
		<!-- Content -->
     	<div id="page-wrapper">
			@yield('content')
		</div>
		<!-- Content -->
	</div><!-- /#wrapper -->

  	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js" type="text/javascript"></script>
  	@yield('scripts')

</body>
</html>