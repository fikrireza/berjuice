@extends('frontend.layout.main')

@section('title-page')
	<title>Berri Juice</title>
@endsection
@section('meta-page')

@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/css/public.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/css/home.css') }}" />
<!-- Important Owl stylesheet -->
<link rel="stylesheet" href="{{ asset('amadeo/plugin/owl-carousel/owl.carousel.css') }}">
<!-- Default Theme -->
<link rel="stylesheet" href="{{ asset('amadeo/plugin/owl-carousel/owl.theme.css') }}">
@endsection

@section('content')
<div class="owl-slide-one-image-fluid">
	@for($a=0; $a<=2; $a++)
	<div class="item">
		<div class="wrapper-image-background" style="background-image: url('{{ asset('amadeo/image/base/owl-'.$a.'.png') }}');">
		</div>
	</div>
	@endfor
</div>

<div id="about" class="setup-wrapper" style="background-image: url('{{ asset('amadeo/image/base/home-about.png') }}');">
	<div class="setup-content nor-wd">
		<h1 class="title">Who We Are</h1>
		<div class="content">
			<p>For more than 22 years, PT Berri Indosari has been the pioneer in Indonesia's juice industry with vast experience in making and delivering the finest juice beverage since 1992. We provide consumers with fresh and healthy juice that delivers taste, nutrition, and consistent quality every day.</p>
			<div class="for-btn">
				<a href="" class="btn btn-orange">More</a>
			</div>
		</div>
	</div>
</div>

<div id="wtfuar" class="setup-wrapper" style="background-image: url('{{ asset('amadeo/image/base/home-about.png') }}');">
	<div class="setup-content nor-wd">
		<h1 class="title">Where To Find Us</h1>
		@for($a=0; $a<=2; $a++)
		<div class="for-wrapper centered for-wtfu">
			<div class="circle" style="background-image: url('{{ asset('amadeo/image/base/pic-'.$a.'.jpg') }}');">
				<div class="vertical-midle">
					<i class="fa fa-{{ $a == 0 ? 'facebook' : ''}}" aria-hidden="true"></i>
					<i class="fa fa-{{ $a == 1 ? 'instagram' : ''}}" aria-hidden="true"></i>
					<i class="fa fa-{{ $a == 2 ? 'twitter' : ''}}" aria-hidden="true"></i>
				</div>
			</div>
			<h2>juiceunited</h2>
		</div>
		@endfor
		<h1 class="title">Recipe</h1>
		@for($a=0; $a<=3; $a++)
		<div class="for-wrapper centered for-recipe">
			<div class="circle" style="background-image: url('{{ asset('amadeo/image/base/pic-'.$a.'.jpg') }}');">
			</div>
			<div class="wrapper-title-name">
				<div class="title-name">
					<h2>title name</h2>
				</div>
			</div>
		</div>
		@endfor
		<div class="centered">
			<a href="" class="btn btn-orange">More</a>
		</div>
	</div>
</div>

<div id="product" class="setup-wrapper">
	@for($a=1; $a<=3; $a++)
	<div class="product-wrapper" style="background-image: url('{{ asset('amadeo/image/base/product-bg.png') }}');">
		@if($a==1)
			<h1 class="title">Product</h1>
		@endif
		<div class="product-content">
			<div class="product-show">
				<div class="for-descrip">
					<div class="product-description">
						<p>Lorem ipsum dolor sit amet, sit in aliquip discere. Soluta facilis duo eu. Novum laudem accusamus nam ad, duo nihil iriure malorum an. Vim graeco consequat ex. In vim nusquam percipit antiopam, epicurei officiis mediocritatem ne duo.</p>
					</div>
					<h1 class="product-name">
						Product Name
					</h1>
				</div>
				<img class="product-img" src="{{ asset('amadeo/image/base/product-'.$a.'.png') }}">
			</div>
		</div>
	</div>
	@endfor
</div>
@endsection

@section('script')

<!-- Include js plugin -->
<script src="{{ asset('amadeo/plugin/owl-carousel/owl.carousel.js') }}"></script>

<script type="text/javascript">
$(document).ready(function() {

  $(".owl-slide-one-image-fluid").owlCarousel({

      navigation : false, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true

  });
});
</script>
@endsection
