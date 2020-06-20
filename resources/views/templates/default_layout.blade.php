<!DOCTYPE html>
<html>
<head>
	<!--- le header--->
@include('inc.head')

	<!--- /.header--->
</head>
<body>

<!---nav--->
@include('inc.nav')
<!---/nav--->

	<!--/.sidebar-->

	@include('inc.sidebar')
	<!--/.sidebar-->
		
	

	<!--content-->

   @yied('content') 

	<!--/content-->



		
	<!--.script -->
	@include('inc.scripts')
	<!--/.script -->
	
</body>
</html>