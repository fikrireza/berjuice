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
	<style type="text/css">
		/* animate */
			.animation-element{
				opacity: 0;
				visibility: hidden;
				transform: translateY(50%) scale(0) skew(-90deg,-45deg);
				transition: all 2s;
			}
			.animation-element.in-view{
				transform: translateY(0%) scale(1) skew(0deg,0deg);
				visibility: visible;
				opacity: 1;
			}
			@media (max-width: 480px) {
				.animation-element,
				.animation-element.in-view{
					transform: translateY(0%) scale(1) skew(0deg,0deg);
					visibility: visible;
					opacity: 1;
				}
			}
		/* animate */
	</style>
	
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
	<script type="text/javascript">
		var $animation_elements = $('.animation-element');
		var $window = $(window);

		function check_if_in_view() {
		  var window_height = $window.height();
		  var window_top_position = $window.scrollTop();
		  var window_bottom_position = (window_top_position + window_height);

		  $.each($animation_elements, function() {
		    var $element = $(this);
		    var element_height = $element.outerHeight();
		    var element_top_position = $element.offset().top;
		    var element_bottom_position = (element_top_position + element_height);

		    //check to see if this current container is within viewport
		    if ((element_bottom_position >= window_top_position) &&
		      (element_top_position <= window_bottom_position)) {
		      $element.addClass('in-view');
		    } else {
		      $element.removeClass('in-view');
		    }
		  });
		}

		$window.on('scroll resize', check_if_in_view);
		$window.trigger('scroll');
	</script>
</body>
</html>
