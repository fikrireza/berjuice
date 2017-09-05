@extends('frontend.layout.main')

@section('title-page')
	<title>Juice United - Recipe {{ $get->recipe_name }}</title>
@endsection

@section('meta-page')
	<meta name="title" content="Juice United - Recipe {{ $get->recipe_name }}">
	<meta name="keywords" content="Juice United, Berri Juice, Vittoria Coffee"/>
	<meta name="description" content="Recipe {{ $get->recipe_name }}">
@endsection

@section('style')
	<link rel="stylesheet" type="text/css" href="{{ asset(mix('amadeo/css/mix/recipe-view.css')) }}">
@endsection

@section('content')
	<div id="recipe" class="setup-wrapper" style="background-image: url('{{ asset('amadeo/image/base/sky.jpg') }}');">
		<div class="mobile display-img" style="background-image: url('{{ asset('amadeo/image/recipe/'.$get->recipe_image) }}');"></div>
		<div class="setup-content nor-wd">
			<h1 class="title">{{ $get->recipe_name }}</h1>
			<div class="tools">
				<label class="tool">
					<span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-user fa-stack-1x fa-inverse"></i>
					</span>
					<label>Serves 12</label>
				</label>
				<label class="tool">
					<span class="fa-stack fa-lg">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-print fa-stack-1x fa-inverse"></i>
					</span>
					<a href="{{ route('frontend.recipe.print', ['slug'=>$get->slug]) }}">
						<label>Print Recipe</label>
					</a>
				</label>
			</div>
			<div class="display-img hidden-mobile" style="background-image: url('{{ asset('amadeo/image/recipe/'.$get->recipe_image) }}');">
			</div>
			<div class="description-wrapper">
				<h2 class="title">Ingredients</h2>
				{!! $get->ingredients !!}
				<h2 class="title">Directions</h2>
				{!! $get->directions !!}
			</div>
			
			<h1 class="title hidden-mobile" style="padding-top: 10px;">Related Recipes</h1>
			<div class="wrapper-recipe">
				@include('frontend.recipe-page.ajax-list-recipe')
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
@endsection

@section('script')
	<script type="text/javascript">
	var win = $(window);
	if( win.width() > 620 ){
		$('.mobile.display-img').hide();
	}
	}
	</script>
@endsection
