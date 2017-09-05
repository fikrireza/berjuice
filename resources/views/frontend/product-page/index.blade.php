@extends('frontend.layout.main')

@section('title-page')
	<title>Juice United - Products</title>
@endsection

@section('meta-page')
	<meta name="title" content="Juice United - Products">
	<meta name="keywords" content="Juice United, Berri Juice, Vittoria Coffee"/>
	<meta name="description" content="For more than 22 years, PT Berri Indosari has been the pioneer in Indonesia's juice industry with vast experience in making and delivering the finest juice beverage since 1992 ...">
@endsection

@section('style')
	<link rel="stylesheet" type="text/css" href="{{ asset(mix('amadeo/css/mix/produk-index.css')) }}">
@endsection

@section('content')
	<div id="space-top"></div>
	<div id="product-index" class="setup-wrapper">
		<div id="dekstop" class="bg-display" style="background-image: url('{{ asset('amadeo/image/base/product-index-wood.jpg') }}');">
			<h1 class="page-name">Our Products</h1>
			<div id="outters">
				@for($q=0; $q<=1; $q++)
				<div class="column">
					@for($a=0; $a<=2; $a++)
					@php ( $que = ($q*3)+$a)
					<div class="wrapper-display">
						<div class="vertical">
							<div class="vertical-align">
								<a href="{{ $que != 5 ? route('frontend.product.view.'.$productUrl[$que]) : '' }}">
									<img class="product-img" src="{{ asset('amadeo/image/base/prod-idx-'.$productUrl[$que].'.png') }}">
									<h1 class="title">{{ $productName[$que] }}</h1>
								</a>
							</div>
						</div>
					</div>
					@endfor
				</div>
				@endfor
			</div>
		</div>
		<div id="mobile" class="bg-display" style="background-image: url('{{ asset('amadeo/image/base/product-index-wood.jpg') }}');">
			<h1 class="page-name">Our Products</h1>
			<div id="outters-owl">
				@for($q=0; $q<=5; $q++)
				<div class="item">
					<div class="text-center">
						<a href="{{ $q != 5 ? route('frontend.product.view.'.$productUrl[$q]) : '' }}">
							<img class="product-img" src="{{ asset('amadeo/image/base/prod-idx-mob-'.$productUrl[$q].'.png') }}">
							<h1 class="title">{{ $productName[$q] }}</h1>
						</a>
					</div>
				</div>
				@endfor
			</div>
		</div>
	</div>
@endsection

@section('script')
	<script type="text/javascript" src="{{ asset('amadeo/plugin/owl-carousel/owl.carousel.js') }}"></script>

	<script type="text/javascript">
	var win = $(window);

	if( win.width() > 620 ){
		$('#mobile.bg-display').hide();
	}
	else if( win.width() < 620 ){
		$('#dekstop.bg-display').hide();

		$("#outters-owl").owlCarousel({
	 
	    	navigation : true,
	    	pagination : false,
	    	slideSpeed : 300,
	    	paginationSpeed : 400,
	    	singleItem:true,
		    navigationText : ["<i class='fa fa-chevron-left' aria-hidden='true' style='margin-right: -10px;'></i><i class='fa fa-chevron-left' aria-hidden='true'></i>","<i class='fa fa-chevron-right' aria-hidden='true' style='margin-right: -10px;'></i><i class='fa fa-chevron-right' aria-hidden='true'></i>"]
	 
	  	});
	}
	</script>
@endsection