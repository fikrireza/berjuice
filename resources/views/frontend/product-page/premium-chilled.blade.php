@extends('frontend.layout.main')

@section('title-page')
	<title>Berri Juice - Premium Chilled</title>
@endsection
@section('meta-page')

@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/css/public.css') }}" />
<style type="text/css">
/* dekstop */
	.product-show{
		min-height: 100vh;
		background-size: cover;
		background-position: center;
		background-repeat: no-repeat;
	}
	.product-show p{
		position: relative;
		z-index: 1;
		padding-top: 60px;
		margin: 0 auto;
		width: 80%;
		height: 200px;
		text-align: center;
		line-height: 2;
		font-family: 'LibreBaskerville';
		color: rgb(255,255,255);
	}
	.product-show p a{
		text-decoration: none;
		color: rgb(255,255,255);
	}
	.product-show p a i{
		font-size: 25px;
		display: block;
	}
	.product-show p a i:nth-child(even){
		margin-top: -10px;
	}
	.product-show #show-product{
		position: absolute;
		bottom: 0;
		align-content: center;
		width: 100%;
	}
	.product-show .setup-content.nor-wd{
		height: 100vh;
	}
	.product-show h1.title{
		position: relative;
		z-index: 1;
		margin-top: 120px;
		font-size: 64px;
		text-shadow: 
			2px 0px rgb(255,255,255),
			-2px 0px rgb(255,255,255),
			0px 2px rgb(255,255,255),
			0px -2px rgb(255,255,255);
	}
	.product-decription{
		min-height: 100vh;
		padding-top: 60px;
		padding-bottom: 185px;
	}
	.product-decription:after{
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
	.product-decription .setup-content{
		z-index: 2;
	}
	.product-decription .table-description{
		width: 100%;
		border: 3px solid rgb(242,176,56);
		border-collapse: separate;
	    border-radius: 20px;
	    -moz-border-radius: 20px;
	}
	.product-decription .table-description tr:first-child td:first-child{
		border-top-left-radius: 20px;
	}

	.product-decription .table-description tr:first-child td:last-child{
		border-top-right-radius: 20px;
	}
	.product-decription .table-description tr:last-child td:first-child{
		border-bottom-left-radius: 20px;
	}
	.product-decription .table-description tr:last-child td:last-child{
		border-bottom-right-radius: 20px;
	}
	.product-decription .table-description tr:nth-child(odd){
		background-color: rgb(255,255,255);
	}
	.product-decription .table-description tr:nth-child(even){
		background-color: rgb(194,225,140);
	}
	.product-decription .table-description tr td{
		text-align: center;
		padding: 10px 25px;
	}
	.product-decription .table-description tr td:first-child{
		text-align: left;
		border-right: 3px solid rgb(242,176,56);
	}
	.product-decription .table-description tr td p{
		margin: 0;
		font-family: 'LibreBaskerville';
		font-size: 16px;
	}
	.product-decription .table-description tr td p:first-child{
		font-family: 'PermanentMarker';
		text-transform: uppercase;
	}
	.product-decription .table-description tr td p{
		color: rgb(93,93,93);
	}
	/*.product-decription .table-description tr:nth-child(odd) td p{
		color: rgb(242,176,56);
	}
	.product-decription .table-description tr:nth-child(even) td p{
		color: rgb(255,255,255);
	}*/
	.product-decription .table-description tr td img{
		width: 25px;
	}
	.product-decription #back-link{
		width: 80%;
		margin: 20px auto;
		text-align: center;
	}
	.product-decription #back-link a{
		color: rgb(242,176,56);
		font-family: 'LibreBaskerville';
		font-size: 26px;
	}
/* dekstop */
@media (max-width: 480px) {
	body{
		overflow-x: hidden;
	}
	.product-show{
		height: 100vh;
	}
	.product-show .setup-content h1.title{
		font-size: 32px;
		margin: 0px auto;
		padding-top: 10vh;
	}
	.product-show p{
		padding-top: 55px;
		width: 100%;
		height: auto;
	}
	.setup-wrapper .setup-content.nor-wd{
		width: 90%;
	}
	.product-show .show-product{
		position: absolute;
		bottom: 0;
		left: -135%;
	    height: 80vh;
	}
	.product-decription .text-center p{
		width: 100%;
		font-family: 'LibreBaskerville';
	}
	.product-decription:after{
		background-size: 100%;
		height: 100px;
	}
	.product-decription .variant{
		display: table;
		width: 100%;
		border-radius: 0px;
		background-color: rgb(255,255,255);
		border-top: 1px solid rgb(246,184,70);
		border-bottom: 1px solid rgb(246,184,70);
		transition: all 2.51s;
	}
	.product-decription .variant.active{
		border-radius: 5px;
		background-color: rgb(194,225,140);
		border-top: none;
		border-bottom: none;
	}
	.product-decription .variant .name{
		display: table-cell;
		width: 90%;
		height: 40px;
		vertical-align: middle;
		padding-left: 15px;
		color: rgb(93,93,93);
		font-family: 'PermanentMarker';
		text-transform: uppercase;
		transition: all 2.51s;
	}
	.product-decription .variant .chevron{
		display: table-cell;
		width: 10%;
		height: 40px;
		vertical-align: middle;
	}
	.product-decription .variant .chevron span img{
		width: 20px;
		transition: all .31s;
	}
	.product-decription .variant.active .chevron span img{
		transform: rotate(90deg);
	}
	.variant-size{
		visibility: hidden;
		opacity: 0;
		height: 0;
	}
	.variant-size.active{
		visibility: visible;
		opacity: 1;
		height: auto;
	}
	.variant-size .list{
		padding-left: 30px;
		margin: 0px;
	}
	.variant-size.active .list{
		margin: 5px 0px;
	}
	.variant-size .list.hide{
		display: none;
	}
	.variant-size .list p{
		font-family: 'LibreBaskerville';
	}
}
</style>
@endsection

@section('content')
@php
	$arrName = [
		'orange', 
		'orange unsweet', 
		'orange ace', 
		'apple', 
		'mango', 
		'pink guava', 
		'lemon', 
		'soursop', 
		'pineapple', 
		'green veggie', 
		'banana mix', 
		'orange mandarin', 
		'mangosteen'
	];
	$arrAvail = [
		1,1,1,1,1, 
		0,0,1,1,0, 
		0,1,1,0,0, 
		1,1,1,1,1, 
		1,1,1,1,1, 
		1,1,1,1,1, 
		0,0,1,0,0, 
		0,1,1,0,1, 
		0,0,0,0,1, 
		1,1,1,1,0, 
		1,1,1,1,0, 
		1,0,1,0,0, 
		1,0,1,0,0
	];
	$arr = [
		'<p>275ml</p>', 
		'<p>500ml</p>', 
		'<p>1l</p>', 
		'<p>2l</p>', 
		'<p>5l</p>'
	];
@endphp
<div class="product-show dekstop setup-wrapper" style="background-image: url('{{ asset('amadeo/image/base/product-bg-2.jpg') }}');">
	<div class="setup-content nor-wd">
		<p>Premium Chilled Juice is our top of the line product. Within it we ensure that every sip retains the savory taste of the fresh fruit. We produce Premium Chilled Juice without heating process, and kept under 4 degree Celsius from raw material to finished goods. Products are delivered with refrigerated trucks, stored in extra cool chillers. With the shelf life of 8 weeks (the shortest shelf life in the industry, to ensure freshness of the juice), Premium Chilled Juice retains vitamins and nutrients highly beneficial for healthy, just like consuming fresh fruits.</p>
		<p>
			<a href="#product-decription">
				<i class="fa fa-chevron-down" aria-hidden="true"></i>
				<i class="fa fa-chevron-down" aria-hidden="true"></i>
			</a>
		</p>
		<h1 class="title">Premium Chilled</h1>
	</div>
	<img id="show-product" src="{{ asset('amadeo/image/base/premium-chilled-product.png') }}">
</div>
<div id="product-decription" class="dekstop product-decription setup-wrapper">
	<div class="setup-content nor-wd">
		<table class="table-description">
			<tr>
				<td>
					<p>AvaiLABLE</p>
				</td>
				@for($a=0; $a<=4; $a++)
				<td>
					{!! $arr[$a] !!}
				</td>
				@endfor
			</tr>
			@for($r=0; $r<=12; $r++)
			<tr>
				<td>
					<p>{{ $arrName[$r] }}</p>
				</td>
				@for($a=0; $a<=4; $a++)
				@php ( $que =  ($r*5)+$a )
				<td>
					<img src="{{ asset('amadeo/image/base/daun.png') }}" style="opacity: {{ $arrAvail[$que] }}">
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

<div class="product-show mobile setup-wrapper" style="background-image: url('{{ asset('amadeo/image/base/product-bg-2.jpg') }}');">
	<div class="setup-content nor-wd">
		<h1 class="title">Premium Chilled</h1>
	</div>
	<img class="show-product" src="{{ asset('amadeo/image/base/home-produk-2.png') }}">
</div>

<div class="mobile product-decription setup-wrapper">
	<div class="setup-content nor-wd">
		<div class="text-center">
			<p>
				Premium Chilled Juice is our top of the line product. Within it we ensure that every sip retains the savory taste of the fresh fruit. We produce Premium Chilled Juice without heating process, and kept under 4 degree Celsius from raw material to finished goods. Products are delivered with refrigerated trucks, stored in extra cool chillers. 
			</p>
			<p>
				With the shelf life of 8 weeks (the shortest shelf life in the industry, to ensure freshness of the juice), Premium Chilled Juice retains vitamins and nutrients highly beneficial for healthy, just like consuming fresh fruits.
			</p>

			<h1 class="title">variants</h1>
		</div>

		@for($a=0; $a<=12; $a++)
		<div class="open-span {{ str_slug($arrName[$a], '-') }} variant {{ $a == 0 ? 'active' : ''}}" data-target="{{ str_slug($arrName[$a], '-') }}">
			<div class="name">
				{{ $arrName[$a] }}
			</div>
			<div class="chevron">
				<span>
					<img src="{{ asset('amadeo/image/base/chevron-right.png') }}">
				</span>
			</div>
		</div>
		<div class="{{ str_slug($arrName[$a], '-') }} variant-size {{ $a == 0 ? 'active' : ''}}">
			@for($b=0; $b<=4; $b++)
				@php ( $que =  ($a*5)+$b )
				<div class="list {{ $arrAvail[$que] == 0 ? 'hide' : ''}}">
					{!! $arr[$b] !!}
				</div>
			@endfor
		</div>
		@endfor

		<p id="back-link">
			<a href="{{ route('frontend.product.index') }}">
				<i class="fa fa-chevron-left" aria-hidden="true"></i> Back to Products
			</a>
		</p>
	</div>
</div>
@endsection

@section('script')
<script type="text/javascript">
var win = $(window);
if( win.width() > 620 ){
	$('.mobile.setup-wrapper').hide();
}
if( win.width() < 620 ){
	$('.dekstop.setup-wrapper').hide();

	$('.open-span').click(function(){
		var targetOne = '.' + $(this).data("target") + '.variant';
		var targetTwo = '.' + $(this).data("target") + '.variant-size';

	    if( $('.variant').hasClass("active") ){
	    	$('.variant').removeClass("active");
	    }
	    if( $('.variant-size').hasClass("active") ){
	    	$('.variant-size').removeClass("active");
	    }

	    $(targetOne).addClass("active");
	    $(targetTwo).addClass("active");
	});
}
</script>
@endsection