@extends('frontend.layout.main')

@section('title-page')
	<title>Juice United - Daily Juice</title>
@endsection

@section('meta-page')
	<meta name="title" content="Juice United - Daily Juice">
	<meta name="keywords" content="Juice United, Berri Juice, Vittoria Coffee"/>
	<meta name="description" content="For more than 22 years, PT Berri Indosari has been the pioneer in Indonesia's juice industry with vast experience in making and delivering the finest juice beverage since 1992 ...">
@endsection

@section('style')
	<link rel="stylesheet" type="text/css" href="{{ asset(mix('amadeo/css/mix/produk-daily-juice.css')) }}">
	<style type="text/css">
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
	</style>
@endsection

@section('content')
	<div class="product-show setup-wrapper dekstop" style="background-image: url('{{ asset('amadeo/image/base/daily-juice-bg.jpg') }}');">
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
	<div id="product-decription" class="product-decription setup-wrapper dekstop">
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

	<div class="product-show setup-wrapper mobile" style="background-image: url('{{ asset('amadeo/image/base/daily-juice-mobile-bg.jpg') }}');">
		<div class="setup-content nor-wd">
			<h1 class="title">Daily Juice</h1>
		</div>
		<img id="show-product" src="{{ asset('amadeo/image/base/daily-juice-mobile-product.png') }}">
	</div>
	<div class="product-decription setup-wrapper mobile">
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
				@for($a=0; $a<=11; $a++)
				<tr>
					<td>
						<p>{{ $arrName[$a] }}</p>
					</td>
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
	<script type="text/javascript">
	var win = $(window);
	if( win.width() > 620 ){
		$('.mobile.setup-wrapper').hide();
	}
	if( win.width() < 620 ){
		$('.dekstop.setup-wrapper').hide();
	}
	</script>
@endsection