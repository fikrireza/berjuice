@extends('frontend.layout.main')

@section('title-page')
	<title>Berri Juice - Products</title>
@endsection
@section('meta-page')

@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/css/public.css') }}" />
<style type="text/css">
#space-top{
	background-color: black;
	height: 60px;
	width: 100%;
}
#product-index{
	height: 100vh;
	background-size: 100% 100%;
	background-position: center;
	background-repeat: no-repeat;
}
#product-index h1.page-name{
	margin: 0 auto;
	font-family: 'PermanentMarker';
	font-size: 44px;
    color: rgb(242,176,56);
    text-align: center;
    text-shadow: 
    	3px 0px rgb(255,255,255), 
    	-3px 0px rgb(255,255,255), 
    	0px 3px rgb(255,255,255), 
    	0px -3px rgb(255,255,255);
}
#product-index #outters{
	width: 100%;
	height: 100vh;
	padding-top: 0px;
    padding-left: 58px;
    padding-right: 57px;
    padding-bottom: 35px;
    display: table;
}
#product-index #outters .column{
	width: 100%;
	display: block;
}
#product-index #outters .column .wrapper-display{
	display: inline-grid;
	text-align: center;
	height: 280px;
	width: 33%;
	float: left;
	margin-left: auto;
	margin-right: auto;
}
#product-index #outters .column .wrapper-display:first-child{
	margin-bottom: 5px;
}
#product-index #outters .column .wrapper-display:last-child{
	margin-top: 5px;
}
#product-index #outters .column .wrapper-display .vertical{
	display: table;
	width: 100%;
	height: 280px;
}
#product-index #outters .column .wrapper-display .vertical .vertical-align{
	width: 100%;
	height: 280px;
	vertical-align: bottom;
	display: table-cell;
	position: relative;
}
#product-index #outters .column .wrapper-display img{
	height: 200px;
	width: auto;
}
#product-index #outters .column .wrapper-display h1.title{
	position: absolute;
	bottom: 0;
	width: 100%;
	margin: 0 auto;
	font-family: 'PermanentMarker';
    color: rgb(242,176,56);
    text-align: center;
    text-shadow: 
    	3px 0px rgb(255,255,255), 
    	-3px 0px rgb(255,255,255), 
    	0px 3px rgb(255,255,255), 
    	0px -3px rgb(255,255,255);
}
</style>
@endsection

@section('content')
<div id="space-top"></div>
<div id="product-index" class="setup-wrapper" style="background-image: url('{{ asset('amadeo/image/base/product-index-wood.jpg') }}');">
	<h1 class="page-name">Our Products</h1>
	<div id="outters">
		@php ( $arr = ['FRESHLY SQUEEZED', 'PREMIUM CHILLED', 'DAILY JUICE', 'VITTORIA COFFE',
		'SPARKLING WATER' , 'PRIVATE LABEL'])
	@php ( $arrUrl = ['premium-chilled', 'premium-chilled', 'daily-juice', 'victtoria-coffe', 'sparkling-water', 'private-label'])
		@for($q=0; $q<=1; $q++)
		<div class="column">
			@for($a=0; $a<=2; $a++)
			@php ( $que = ($q*3)+$a)
			<div class="wrapper-display">
				<div class="vertical">
					<div class="vertical-align">
						<a href="{{ route('frontend.product.view.'.$arrUrl[$que]) }}">
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
@endsection

@section('script')

@endsection