@extends('frontend.layout.main')

@section('title-page')
	<title>Juice United - VICTTORIA COFFEE</title>
@endsection

@section('meta-page')
	<meta name="title" content="Juice United - VICTTORIA COFFEE">
	<meta name="keywords" content="Juice United, Berri Juice, Vittoria Coffee"/>
	<meta name="description" content="For more than 22 years, PT Berri Indosari has been the pioneer in Indonesia's juice industry with vast experience in making and delivering the finest juice beverage since 1992 ...">
@endsection

@section('style')
	<link rel="stylesheet" type="text/css" href="{{ asset(mix('amadeo/css/mix/produk-victtoria-coffe.css')) }}">
@endsection

@section('content')
	<div id="product-show" class="setup-wrapper" style="background-image: url('{{ asset('amadeo/image/base/vittoria-bg.jpg') }}');">
		<div class="setup-content nor-wd">
			<h1 class="title">Vittoria Coffee</h1>
		</div>
		<img id="show-product" src="{{ asset('amadeo/image/base/victtoria-coffe-product.png') }}">
	</div>

	@for($i=2; $i<=5; $i++)
	<div id="product-decription" class="setup-wrapper" style="background-image: url('{{ asset('amadeo/image/base/victtoria-coffe-product-bg'.$i.'.jpg') }}');">
		<div class="wrapper-prod-descr {{ $arrClass[$i] }} animation-element">
			<h3>{{ $arrTitle[$i] }}</h3>
			<p>{{ $arrDesc[$i] }}</p>
		</div>
	</div>
	@endfor

	<div id="product-table" class="setup-wrapper">
		<div class="setup-content nor-wd">

			<h1 class="title">variants</h1>

			<table class="table-description">
				<tr>
					<td>
						<p>AvaiLABLE</p>
					</td>
					@for($a=0; $a<=1; $a++)
					<td>
						<p>{!! $arrPackaging[$a] !!}</p>
					</td>
					@endfor
				</tr>
				@for($r=0; $r<=6; $r++)
				<tr>
					<td>
						<p>{{ $arrPackagingName[$r] }}</p>
					</td>
					@for($a=0; $a<=1; $a++)
					@php ( $que =  ($r*2)+$a )
					<td>
						<img src="{{ asset('amadeo/image/base/coffe.png') }}" style="opacity: {{ $arrPackagingAvail[$que] }}">
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