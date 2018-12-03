<!DOCTYPE html>
<html>
<head>
	<title>Cms</title>
	
	<link href="..\public/css/app.css" rel="stylesheet" type="text/css">
</head>

<style>
body{
	/* background:red; */
}
</style>
<body>
@include('inc.navbar')

	<div class="container">
	@if(Request::is('/'))
		@include('inc.showcase')
	@endif
		<div class="row">
			<div class="col-md-8 col-lg-8">
					@include('inc.message')
				@yield('content')
			</div>

			<div class="col-md-4 col-lg-4">
				@include('inc.sidebar')
			</div>

		</div>		
		
	</div>
	<footer id="footer" class="text-center">
		<p> copyright 2018 &copy Abu Muhammad</p>
	</footer>

</body>
</html>