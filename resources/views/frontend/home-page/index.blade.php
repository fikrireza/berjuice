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
<div id="banner-slider" class="owl-slide-one-image-fluid">
	@for($a=0; $a<=2; $a++)
	<div class="item">
		<div class="wrapper-image-background" style="background-image: url('{{ asset('amadeo/image/base/owl-'.$a.'.jpg') }}');">
		</div>
	</div>
	@endfor
</div>

<div id="about" class="setup-wrapper" style="background-image: url('{{ asset('amadeo/image/base/home-about.jpg') }}');">
	<div class="setup-content nor-wd">
		<h1 class="title animation-element">Who We Are</h1>
		<div class="content animation-element">
			<p>For more than 22 years, PT Berri Indosari has been the pioneer in Indonesia's juice industry with vast experience in making and delivering the finest juice beverage since 1992. We provide consumers with fresh and healthy juice that delivers taste, nutrition, and consistent quality every day.</p>
			<div class="for-btn">
				<a href="{{ route('frontend.about') }}" class="btn btn-orange">More</a>
			</div>
		</div>
	</div>
</div>

<div id="product" class="setup-wrapper">
	@for($a=1; $a<=3; $a++)
	<div @if($a!=1) id="product-{{ $productUrl[$a].'-'.$a }}" @endif class="product-wrapper" style="background-image: url('{{ asset('amadeo/image/base/home-produk-bg-'.$a.'.jpg') }}');">
		@if($a==1)
			<h1 class="title">Product</h1>
		@endif
		<img @if($a==1) id="product-{{ $productUrl[$a].'-'.$a }}" @endif class="product-img {{ $productUrl[$a] }}" src="{{ asset('amadeo/image/base/home-produk-'.$a.'.png') }}">
		<div class="product-content">
			<div class="product-show">
				<div class="for-descrip">
					<div class="product-description animation-element">
						<p>
							{{ $productDesc[$a] }}
						</p>
					</div>
					<a href="{{ route('frontend.product.view.'.$productUrl[$a]) }}">
						<h1 class="product-name">
							{{ $productName[$a] }}
						</h1>
					</a>
				</div>
			</div>
		</div>
	</div>
	@endfor
</div>

<div id="wtfuar" class="setup-wrapper" style="background-image: url('{{ asset('amadeo/image/base/wtfuar-bg.jpg') }}');">
	<div class="setup-content nor-wd">
		<h1 id="wtfu" class="title">Where To Find Us</h1>
		@php($a=0)
		@foreach($itemsIg  as $key => $item)
		<div class="for-wrapper centered for-wtfu">
			<div class="circle animation-element animation-element" style="background-image: url('{{ $item['images']['standard_resolution']['url'] }}');">
				<div class="vertical-midle">
					<i class="fa fa-{{ $sosmedIcon[$a] }}" aria-hidden="true"></i>
				</div>
			</div>
			<h2>
				<a href="{{ $sosmedUrl[$a] }}">
					{{ $sosmedIcon[$a] }}
				</a>
			</h2>
		</div>
		@php($a++)
		@if($a == 3)
			@break
		@endif
		@endforeach
		<h1 id="recipe" class="title">Recipe</h1>
		@foreach($recipe as $list)
		<div class="for-wrapper centered for-recipe">
			<div class="circle animation-element" style="background-image: url('{{ asset('amadeo/image/recipe/'.$list->recipe_image_thumb) }}');">
			</div>
			<div class="wrapper-title-name">
				<div class="title-name">
					<h2>
						<a href="{{ route('frontend.recipe.view', ['slug' => $list->slug]) }}">
							<p>{{ $list->recipe_name }}</p>
						</a>
					</h2>
				</div>
			</div>
		</div>
		@endforeach
		<div class="centered">
			<a href="{{ route('frontend.recipe') }}" class="btn btn-orange">More</a>
		</div>
	</div>
</div>

@include('frontend.include.scroll-to')
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
