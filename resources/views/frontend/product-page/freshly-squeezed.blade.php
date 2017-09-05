@extends('frontend.layout.main')

@section('title-page')
	<title>Juice United - FRESHLY SQUEEZED</title>
@endsection

@section('meta-page')
	<meta name="title" content="Juice United - FRESHLY SQUEEZED">
	<meta name="keywords" content="Juice United, Berri Juice, Vittoria Coffee"/>
	<meta name="description" content="We serve you real fresh fruits for Freshly Squeezed sensation direct from the finest farms, handpicked fresh orange fruits.">
@endsection

@section('style')
	<link rel="stylesheet" type="text/css" href="{{ asset(mix('amadeo/css/mix/produk-freshly-squeezed.css')) }}">
	<style type="text/css">
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
	</style>
@endsection

@section('content')
	<div id="product-show" class="setup-wrapper" style="background-image: url('{{ asset('amadeo/image/base/home-produk-bg-1.jpg') }}');">
		<div class="setup-content nor-wd">
			<h1 class="title">FRESHLY SQUEEZED</h1>
		</div>
		<img id="show-product" src="{{ asset('amadeo/image/base/home-produk-1.png') }}">
		<div class="chevron">
			<a href="#product-decription">
				<i class="fa fa-chevron-down" aria-hidden="true"></i>
				<i class="fa fa-chevron-down" aria-hidden="true"></i>
			</a>
		</div>
	</div>
	<div id="product-decription" class="setup-wrapper">
		<div class="display" style="background-image: url('{{ asset('amadeo/image/base/freshly-squeezed-descrip.jpg') }}');">
			
		</div>
		<div class="descrip">
			<div class="content">
				<h1>
					1 liter contains 3 kilograms of imported orange
				</h1>
				<p>
					We serve you real fresh fruits for Freshly Squeezed sensation direct from the finest farms, handpicked fresh orange fruits.
				</p>
				<table class="dekstop">
					<tr>
						<td colspan="3">
							available
						</td>
					</tr>
					<tr>
						<td>1 liter</td>
						<td>2 liter</td>
						<td>5 liter</td>
					</tr>
				</table>
				<table class="mobile">
					<tr>
						<td>available</td>
					</tr>
					<tr>
						<td>1 liter</td>
					</tr>
					<tr>
						<td>2 liter</td>
					</tr>
					<tr>
						<td>5 liter</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="clearfix"></div>
		<p id="back-link">
			<a href="{{ route('frontend.product.index') }}">
				<i class="fa fa-chevron-left" aria-hidden="true"></i> Back to Products
			</a>
		</p>
	</div>
@endsection

@section('script')
	<script type="text/javascript">
	var win = $(window);
	if( win.width() > 620 ){
		$('table.mobile').hide();
	}
	if( win.width() < 620 ){
		$('table.dekstop').hide();
	}
	</script>
@endsection