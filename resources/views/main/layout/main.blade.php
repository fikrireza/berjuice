<!DOCTYPE html>
<html>
<head>
	
	<title>Berri Juice</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<link rel="stylesheet" type="text/css" href="{{ asset('plugin/bootstrap-3.3.7/css/bootstrap.css') }}" />
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css ">
	
	@yield("style")

	<link rel="stylesheet" type="text/css" href="{{ asset('font/1-font-family.css') }}" />

	<script src="{{ asset('plugin/jquery/jquery-3.2.0.min.js') }}"></script>
	
</head>
<body>
	@include('main.part.navbar')

	@yield("content")

	<script src="{{ asset('plugin/angular-1.6/angular.min.js') }}"></script>
	<script src="{{ asset('plugin/bootstrap-3.3.7/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/navbar-static.js') }}"></script>
	@yield("script")
</body>
</html>