@extends('frontend.layout.main')

@section('title-page')
	<title>Berri Juice - Premium Chilled</title>
@endsection
@section('meta-page')

@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/css/public.css') }}" />
<style type="text/css">
#product-show{
	/*height: 100vh;*/
	/*background-size: cover;*/
	/*background-position: center;*/
	background-repeat: no-repeat;
	text-align: center;
    height: 125vh;
    background-size: 100%;
    background-position: center top;
}
#product-show  .setup-content{
	height: 100vh;
}
#product-show #show-product{
	position: absolute;
	bottom: 0;
	left: 0;
	width: 100%;
	/*height: 75vh;*/
}
#product-show h1.title{
	position: absolute;
	z-index: 1;
    width: 100%;
    /*bottom: 16vh;*/
	/*margin: 0 auto;*/
	bottom: -10vh;
    text-align: left;
    padding-left: 4%;
	font-size: 64px;
	text-shadow: 
		5px 0px rgb(255,255,255),
		-5px 0px rgb(255,255,255),
		0px 5px rgb(255,255,255),
		0px -5px rgb(255,255,255);
}
#product-show .chevron{
	position: absolute;
	bottom: 10px;
	width: 100%;
}
#product-show .chevron a{
	text-decoration: none;
}
#product-show .chevron i{
	font-size: 25px;
	display: block;
	color: rgb(255,255,255);
}
#product-show .chevron i:nth-child(even){
	margin-top: -10px;
}

#product-decription{
	min-height: 100vh;
	padding-top: 50px;
	padding-bottom: 185px;
}
#product-decription:after{
	content: "";
	position: absolute;
	bottom: 0;
	width: 100%;
	height: 340px;
	background-image: url("{{ asset('amadeo/image/base/premium-chilled-footer.png') }}");
	background-repeat: no-repeat;
	background-position: center;
	background-size: cover;
}
#product-decription h1.title{
	margin: 0;
	margin-bottom: 40px;
}
#product-decription p.description{
	width: 80%;
	margin: 0 auto;
	text-align: center;
	margin-bottom: 40px;
    font-family: 'LibreBaskerville';
    color: rgb(29,29,29);
}
#product-decription .setup-content{
	z-index: 2;
}
#product-decription .table-description{
	width: 100%;
	margin-bottom: 80px;
	border: 3px solid rgb(242,176,56);
	border-collapse: separate;
    border-radius: 20px;
    -moz-border-radius: 20px;
}
#product-decription .table-description tr:first-child td:first-child{
	border-top-left-radius: 20px;
}

#product-decription .table-description tr:first-child td:last-child{
	border-top-right-radius: 20px;
}
#product-decription .table-description tr:last-child td:first-child{
	border-bottom-left-radius: 20px;
}
#product-decription .table-description tr:last-child td:last-child{
	border-bottom-right-radius: 20px;
}
#product-decription .table-description tr:first-child{
	background-color: rgb(119,188,0);
}
#product-decription .table-description tr{
	background-color: rgb(255,255,255);
}
#product-decription .table-description tr td{
	text-align: center;
	padding: 10px 25px;
}
#product-decription .table-description tr td p{
	margin: 0;
	font-family: 'LibreBaskerville';
	font-size: 16px;
}
#product-decription .table-description tr td p{
	font-family: 'PermanentMarker';
	text-transform: uppercase;
	color: rgb(68,68,68);
}
#product-decription .table-description tr:first-child td p{
	color: rgb(255,255,255);
}
#product-decription #back-link{
	width: 80%;
	margin: 20px auto;
	text-align: center;
}
#product-decription #back-link a{
	color: rgb(242,176,56);
	font-family: 'LibreBaskerville';
	font-size: 26px;
}
@media (max-width: 480px) {
	#product-show{
		height: 100vh;
	}
	#product-show h1.title{
		font-size: 48px;
		left: 0px;
		right: 0px;
		bottom: 50vh;
		margin: 0px auto;
	}
	#product-decription .setup-content{
		width: 85%;
	}
	#product-show #show-product{
		height: auto;
	}
	#product-decription p.description{
		width: 100%;
	}
	#product-decription .table-description tr td{
		padding: 5px;
	}
	#product-decription .table-description tr td p{
		font-size: 12px;
	}
}
</style>
@endsection

@section('content')
<div id="product-show" class="setup-wrapper" style="background-image: url('{{ asset('amadeo/image/base/daily-juice-bg.jpg') }}');">
	<div class="setup-content nor-wd">
		<h1 class="title">Daily Juice</h1>
	</div>
	<img id="show-product" src="{{ asset('amadeo/image/base/daily-juice-product.png') }}">
	<div class="chevron">
		<a href="#product-decription">
			<i class="fa fa-chevron-down" aria-hidden="true"></i>
			<i class="fa fa-chevron-down" aria-hidden="true"></i>
		</a>
	</div>
</div>
<div id="product-decription" class="setup-wrapper">
	<div class="setup-content nor-wd">
		<h1 class="title">lorem ipsum dolor sit</h1>
		<p class="description">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
		<table class="table-description animation-element">
			<tr>
				<td colspan="3">
					<p>AvaiLABLE Variants</p>
				</td>
			</tr>
			@php
				$arrName = ['','100% orange', 'mangosteen', 'pink guava', 'orange', 'soursop', 'apple', 'mandarin orange', 'banana mix', 'green veggies', 'coconut water', 'mango'];
			@endphp
			@for($r=0; $r<=3; $r++)
			<tr>
				@for($a=1; $a<=3; $a++)
				@php ( $que =  ($r*3)+$a )
				@if($que == 12)
					@break
				@endif
				<td>
					<p>{{ $arrName[$que] }}</p>
				</td>
				@endfor
			</tr>
			@endfor
		</table>

		<p id="back-link">
			<a href="{{ route('frontend.product.index') }}">
				<i class="fa fa-chevron-left" aria-hidden="true"></i> Back to Products
			</a>
		</p>
	</div>
</div>
@endsection

@section('script')

@endsection