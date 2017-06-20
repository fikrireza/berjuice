<!DOCTYPE html>
<html>
<head>

	@yield("title-page")
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	@yield("meta-page")
	<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/plugin/bootstrap-3.3.7/css/bootstrap.css') }}" />
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css ">
	@yield("style")
	<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/font/1-font-family.css') }}" />
	<script src="{{ asset('amadeo/plugin/jquery/jquery-3.2.0.min.js') }}"></script>
</head>
<body>
	@include('frontend.include.navbar')
	@yield("content")
	@include('frontend.include.footer')
	<script src="{{ asset('amadeo/plugin/bootstrap-3.3.7/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('amadeo/js/publict.js') }}"></script>
	@yield("script")
</body>
</html>
