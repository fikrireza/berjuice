@extends('frontend.layout.main')

@section('title-page')
	<title>Berri Juice - Products</title>
@endsection
@section('meta-page')

@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/css/public.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/css/produk-index.css') }}" />
@endsection

@section('content')
<div id="space-top"></div>
<div id="product-index" class="setup-wrapper">
	<div class="bg-display" style="background-image: url('{{ asset('amadeo/image/base/product-index-wood.jpg') }}');">
		<h1 class="page-name">Our Products</h1>
		<div id="outters">
			@php ( $arr = ['FRESHLY SQUEEZED', 'PREMIUM CHILLED', 'DAILY JUICE', 'VITTORIA COFFEE',
			'ESPRESSOTORIA MACHINE' , 'PRIVATE LABEL'])
		@php ( $arrUrl = ['freshly-squeezed', 'premium-chilled', 'daily-juice', 'victtoria-coffe', 'espressotoria-machine', 'private-label'])
			@for($q=0; $q<=1; $q++)
			<div class="column">
				@for($a=0; $a<=2; $a++)
				@php ( $que = ($q*3)+$a)
				<div class="wrapper-display">
					<div class="vertical">
						<div class="vertical-align">
							<a href="{{ $que != 5 ? route('frontend.product.view.'.$arrUrl[$que]) : '' }}">
								<img class="product-img" src="{{ asset('amadeo/image/base/prod-idx-'.$que.'.png') }}">
								<h1 class="title">{{ $arr[$que] }}</h1>
							</a>
						</div>
					</div>
				</div>
				@endfor
			</div>
			@endfor
		</div>
	</div>
</div>
@endsection

@section('script')

@endsection