@extends('frontend.layout.main')

@section('title-page')
	<title>Juice United - Premium Chilled</title>
@endsection

@section('meta-page')
	<meta name="title" content="Juice United - Premium Chilled">
	<meta name="keywords" content="Juice United, Berri Juice, Vittoria Coffee"/>
	<meta name="description" content="Premium Chilled Juice is our top of the line product. Within it we ensure that every sip retains the savory taste of the fresh fruit. We produce Premium Chilled Juice without heating process, and kept under 4 degree Celsius from raw material to finished goods ...">
@endsection

@section('style')
	<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/css/public.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/css/produk-premium-chilled.css') }}" />
@endsection

@section('content')
	<div class="product-show dekstop setup-wrapper" style="background-image: url('{{ asset('amadeo/image/base/product-bg-2.jpg') }}');">
		<div class="setup-content nor-wd">
			{!! $productDescript[0] !!}
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
						{!! $arrSize[$a] !!}
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
				{!! $productDescript[1] !!}
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
						{!! $arrSize[$b] !!}
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