@extends('frontend.layout.main')

@section('title-page')
	<title>Berri Juice - Recipe</title>
@endsection
@section('meta-page')

@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/css/public.css') }}" />
<style type="text/css">
/* dekstop */
	#recipe{
		background-size: cover;
		background-position: center;
		background-repeat: no-repeat;
	}
	#recipe:before{
		content: "";
	    background-image: url('{{ asset('amadeo/image/base/leaves-up.png') }}');
	    background-size: cover;
	    background-position: center;
	    background-repeat: no-repeat;
	    position: absolute;
	    top: 0px;
	    width: 100%;
	    height: 290px;
	    z-index: 1;
	}
	#recipe .setup-content{
		background-color: rgb(255,255,255);

	}
	#recipe .setup-content h1.title{
		padding-top: 120px;
		margin-top: 0;
		margin-bottom: 80px;
	}
	#recipe .setup-content .wrapper-recipe{
		position: relative;
		padding-left: 10px;
		padding-right: 10px;
	}
	#recipe .setup-content .wrapper-recipe .recipe-show{
		float: left;
		width: 25%;
		height: 35vh;
		padding: 10px;
		margin-bottom: 30px;
	}
	#recipe .setup-content .wrapper-recipe .recipe-show .recipe-img{
		width: 100%;
		height: 35vh;
		box-shadow: 0px 0px 20px;
		background-size: cover;
	    background-position: center;
	    background-repeat: no-repeat;
	    display: table;
	}
	#recipe .setup-content .wrapper-recipe .recipe-show .recipe-img .descrip-wrapper{
	    text-align: center;
	    vertical-align: bottom;
	    display: table-cell;
		width: 100%;
		height: 35vh;
		background: rgba(0,0,0,.6); 
	    background: -webkit-linear-gradient(rgba(0,0,0,0), rgba(0,0,0,.1), rgba(0,0,0,1)); 
	    background: -o-linear-gradient(rgba(0,0,0,0), rgba(0,0,0,.1), rgba(0,0,0,1)); 
	    background: -moz-linear-gradient(rgba(0,0,0,0), rgba(0,0,0,.1), rgba(0,0,0,1)); 
	    background: linear-gradient(rgba(0,0,0,0), rgba(0,0,0,.1), rgba(0,0,0,1));
	}
	#recipe .setup-content .wrapper-recipe .recipe-show .recipe-img a{
		text-decoration: none;
		color: rgb(255,255,255);
	}
	#recipe .setup-content .wrapper-recipe .recipe-show .recipe-img p{
		width: 80%;
		margin: 0 auto;
		margin-bottom: 5px;
		color: rgb(255,255,255);
		font-family: 'LibreBaskerville';
	}
	#recipe .setup-content .wrapper-recipe .recipe-show .recipe-img p:nth-child(odd){
		font-weight: bold;
		font-size: 18px;
	}
	#recipe .setup-content .centered{
		width: 80%;
		text-align: center;
		margin: 0 auto;
		padding: 20px 0px;
	}
/* dekstop */

@media (max-width: 480px) {
	#recipe:before{
	    background-size: 100% 100%;
	    background-position: center top;
	    height: 105px;
	}
	#recipe .setup-content{
		background-color: rgba(0,0,0,0);
		width: 100%;
	}
	#recipe .setup-content h1.title{
		padding-top: 60px;
		margin-bottom: 40px;
	}
	#recipe .setup-content .wrapper-recipe{
		padding: 0px;
	}
	#recipe .setup-content .wrapper-recipe .recipe-show{
		width: 100%;
		height: 35vh;
		padding: 0;
	}
	#recipe .setup-content .wrapper-recipe .recipe-show .recipe-img,
	#recipe .setup-content .wrapper-recipe .recipe-show .recipe-img .descrip-wrapper{
		height: 35vh;
	}
}
</style>
@endsection

@section('content')

<div id="recipe" class="setup-wrapper" style="background-image: url('{{ asset('amadeo/image/base/sky.jpg') }}');">
	<div class="setup-content nor-wd">
		<h1 class="title">Recipe</h1>
		<div class="wrapper-recipe">
			@php
				$arrName = ['', 'Chocolate Orange Cake', 'Jiggly Orange Wedges', 'Orange Glazed Ham Steak', 'Orange Chicken', 'Honey Orange BBQ Chicken', 'Citrus Chicken and Rice', 'Slow Cooker Orange Beef', 'Crispy Orange Beef'];

				$arrCate = ['', 'Dessert', 'Dessert', 'Entree', 'Entree', 'Entree', 'Entree', 'Entree', 'Entree'];
			@endphp
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
