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
	min-height: 100vh;
	padding-bottom: 50px;
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
}
#product-show p{
	padding-top: 60px;
	margin: 0 auto;
	width: 80%;
	height: 200px;
	text-align: center;
	line-height: 2;
	font-family: 'LibreBaskerville';
	color: rgb(255,255,255);
}
#product-show #show-product{
	margin-top: 50px;
	align-content: center;
	width: 100%;
}
#product-show h1.title{
	margin-top: -50px;
	font-size: 64px;
	text-shadow: 
		5px 0px rgb(255,255,255),
		-5px 0px rgb(255,255,255),
		0px 5px rgb(255,255,255),
		0px -5px rgb(255,255,255);
}
#product-decription{
	min-height: 100vh;
	padding-top: 60px;
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
#product-decription .setup-content{
	z-index: 2;
}
#product-decription .table-description{
	width: 100%;
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
#product-decription .table-description tr:nth-child(odd){
	background-color: rgb(255,255,255);
}
#product-decription .table-description tr:nth-child(even){
	background-color: rgb(255,205,0);
}
#product-decription .table-description tr td{
	text-align: center;
	padding: 10px 25px;
}
#product-decription .table-description tr td:first-child{
	text-align: left;
	border-right: 3px solid rgb(242,176,56);
}
#product-decription .table-description tr td p{
	margin: 0;
	font-family: 'LibreBaskerville';
	font-size: 16px;
}
#product-decription .table-description tr td p:first-child{
	font-family: 'PermanentMarker';
	text-transform: uppercase;
}
#product-decription .table-description tr:nth-child(odd) td p{
	color: rgb(242,176,56);
}
#product-decription .table-description tr:nth-child(even) td p{
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
</style>
@endsection

@section('content')
<div id="product-show" class="setup-wrapper" style="background-image: url('{{ asset('amadeo/image/base/product-bg-2.jpg') }}');">
	<div class="setup-content nor-wd">
		<p>Premium Chilled Juice is our top of the line product. Within it we ensure that every sip retains the savory taste of the fresh fruit. We produce Premium Chilled Juice without heating process, and kept under 4 degree Celsius from raw material to finished goods. Products are delivered with refrigerated trucks, stored in extra cool chillers. With the shelf life of 8 weeks (the shortest shelf life in the industry, to ensure freshness of the juice), Premium Chilled Juice retains vitamins and nutrients highly beneficial for healthy, just like consuming fresh fruits.</p>
		<img id="show-product" src="{{ asset('amadeo/image/base/premium-chilled-product.png') }}">
		<h1 class="title">Premium Chilled</h1>
	</div>
</div>
<div id="product-decription" class="setup-wrapper">
	<div class="setup-content nor-wd">
		<table class="table-description">
			<tr>
				<td>
					<p>AvaiLABLE</p>
				</td>
				@php ( $arr = ['<p>275ml</p><p>PET Bottle</p>', '<p>500ml</p><p>PET Bottle</p>', '<p>1l</p><p>PET Bottle</p>', '<p>2l</p><p>PET Bottle</p>', '<p>5l</p><p>Gallon</p>'])
				@for($a=0; $a<=4; $a++)
				<td>
					{!! $arr[$a] !!}
				</td>
				@endfor
			</tr>
			@php
				$arrName = ['orange', 'orange unsweet', 'orange ace', 'apple', 'mango', 'pink guava', 'lemon' ,'soursop', 'pineapple', 'red veggie', 'green veggie', 'banana mix', 'orange mandarin', 'mangosteen', 'cranberry'];
				$arrAvail = [1,1,1,1,1, 0,0,1,1,0, 0,1,1,0,0, 1,1,1,1,1, 1,1,1,1,1, 1,1,1,1,1, 0,0,1,0,0, 0,1,1,0,1, 0,0,0,0,1, 0,0,1,0,0, 1,1,1,1,0, 1,1,1,1,0, 1,0,1,0,0, 1,0,1,0,0, 1,0,1,1,1]
			@endphp
			@for($r=0; $r<=14; $r++)
			<tr>
				<td>
					<p>{{ $arrName[$r] }}</p>
				</td>
				@for($a=0; $a<=4; $a++)
				@php ( $que =  ($r*5)+$a )
				<td>
					<p style="opacity: {{ $arrAvail[$que] }}"><i class="fa fa-check" aria-hidden="true"></i></p>
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