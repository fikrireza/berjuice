<!DOCTYPE html>
<html>
<head>

	@yield("title-page")
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	@yield("meta-page")
	<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/plugin/bootstrap-3.3.7/css/bootstrap.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/plugin/font-awesome/css/font-awesome.min.css') }}">
	
	<script src="{{ asset('amadeo/plugin/jquery/jquery-3.2.0.min.js') }}"></script>

	@yield("style")
	<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/font/1-font-family.css') }}" />
	<link rel="icon" type="image/png" href="{{ asset('amadeo/image/base/logo-juice-united.png') }}" />

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
					  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
						m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
					  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-83016466-8', 'auto');
		ga('send', 'pageview');
	</script>
	
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
