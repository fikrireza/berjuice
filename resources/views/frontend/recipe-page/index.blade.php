@extends('frontend.layout.main')

@section('title-page')
	<title>Berri Juice - Recipe</title>
@endsection
@section('meta-page')

@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/css/public.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/css/recipe-index.css') }}" />
@endsection

@section('content')

<div id="recipe" class="setup-wrapper" style="background-image: url('{{ asset('amadeo/image/base/sky.jpg') }}');">
	<div class="setup-content nor-wd">
		<h1 class="title">Recipe</h1>
		<div class="wrapper-recipe">
			@for($a=1; $a<=8; $a++)
			<div class="recipe-show animation-element">
				<div class="recipe-img" style="background-image: url('{{ asset('amadeo/image/base/recip-'.$a.'.png') }}');">
					<div class="descrip-wrapper">
						<a href="{{ $a == 1 ? route('frontend.recipe.view') : '#' }}">
							<p>{{ $arrName[$a] }}</p>
						</a>
						<p>{{ $arrCate[$a] }}</p>
					</div>
				</div>
			</div>
			@endfor
			<div class="clearfix"></div>
		</div>
		<div class="centered">
			<a href="{{ route('frontend.recipe') }}" class="btn btn-orange">Load More</a>
		</div>
	</div>
</div>
@endsection

@section('script')

@endsection
