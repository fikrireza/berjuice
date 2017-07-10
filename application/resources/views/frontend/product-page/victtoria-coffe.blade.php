@extends('frontend.layout.main')

@section('title-page')
	<title>Berri Juice - VICTTORIA COFFE</title>
@endsection
@section('meta-page')

@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/css/public.css') }}" />
<style type="text/css">
#product-show{
	min-height: 100vh;
	padding-bottom: 0px;
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
}
#product-show #show-product{
	margin-top: 280px;
	align-content: center;
	width: 100%;
}
#product-show h1.title{
	margin-top: -50px;
	margin-bottom: 0;
	font-size: 64px;
	text-shadow: 
		5px 0px rgb(255,255,255),
		-5px 0px rgb(255,255,255),
		0px 5px rgb(255,255,255),
		0px -5px rgb(255,255,255);
}
#product-decription{
	min-height: 100vh;
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
}
#product-decription p{
	width: 50%;
	text-align: right;
	float: right;
	margin-top: 180px;
	font-family: 'LibreBaskerville';
	color: rgb(29,29,29);
}
#product-table{
	background-color: rgb(0,0,0);
	min-height: 100vh;
	padding-top: 60px;
	padding-bottom: 185px;
}
#product-table .setup-content{
	z-index: 2;
}
#product-table .setup-content h1.title{
	color: rgb(255,255,255);
	margin-bottom: 40px;
}
#product-table .table-description{
	width: 100%;
	border: 3px solid rgb(255,255,255);
	border-collapse: separate;
    border-radius: 20px;
    -moz-border-radius: 20px;
}
#product-table .table-description tr:first-child td:first-child{
	border-top-left-radius: 20px;
}
#product-table .table-description tr:first-child td:last-child{
	border-top-right-radius: 20px;
}
#product-table .table-description tr:last-child td:first-child{
	border-bottom-left-radius: 20px;
}
#product-table .table-description tr:last-child td:last-child{
	border-bottom-right-radius: 20px;
}
#product-table .table-description tr{
	background-color: rgb(0,0,0);
}
#product-table .table-description tr:first-child{
	background-color: rgb(70,70,70);
}
#product-table .table-description tr td{
	text-align: center;
	padding: 10px 25px;
}
#product-table .table-description tr td:first-child{
	text-align: left;
	border-right: 3px solid rgb(255,255,255);
}
#product-table .table-description tr td p{
	margin: 0;
	font-family: 'LibreBaskerville';
	font-size: 16px;
	color: rgb(255,255,255);
}
#product-table .table-description tr:first-child td p{
	font-family: 'PermanentMarker';
	text-transform: uppercase;
}
#product-table #back-link{
	width: 80%;
	margin: 20px auto;
	text-align: center;
}
#product-table #back-link a{
	color: rgb(255,255,255);
	font-family: 'LibreBaskerville';
	font-size: 26px;
}
</style>
@endsection

@section('content')
<div id="product-show" class="setup-wrapper" style="background-image: url('{{ asset('amadeo/image/base/vittoria-bg.jpg') }}');">
	<div class="setup-content nor-wd">
		<img id="show-product" src="{{ asset('amadeo/image/base/victtoria-coffe-product.png') }}">
		<h1 class="title">Vittoria Coffe</h1>
	</div>
</div>
<div id="product-decription" class="setup-wrapper" style="background-image: url('{{ asset('amadeo/image/base/vittoria-bg-2.jpg') }}');">
	<div class="setup-content nor-wd">
		<p>Vittoria Coffee is an Australian manufacturer of coffee products. Founded in Sydney in 1947, the business was established as an importer of Continental European foods. In 1958 they began roasting small amounts of premium Arabica coffee at their food importing premises in the Sydney’s suburb of Haymarket, initially supplying Sydney’s first ‘Italian cafés’. Today, Vittoria is Australia's largest and best known coffee company and supplies coffee to many restaurants and cafés around the country in addition to selling its coffee in supermarkets and retail outlets.</p>
	</div>
</div>
<div id="product-table" class="setup-wrapper">
	<div class="setup-content nor-wd">

		<h1 class="title">variants</h1>

		<table class="table-description">
			<tr>
				<td>
					<p>AvaiLABLE</p>
				</td>
				@php ( $arr = ['beans', 'grounds', 'capsules'] )
				@for($a=0; $a<=2; $a++)
				<td>
					<p>{!! $arr[$a] !!}</p>
				</td>
				@endfor
			</tr>
			@php
				$arrName = ['Espresso', 'Mountain Grown', 'Organic', 'Oro', 'Italian', 'Family Cup'];
				$arrAvail = [1,1,1, 1,1,1, 1,1,1, 1,1,1, 1,1,1, 0,1,0 ]
			@endphp
			@for($r=0; $r<=5; $r++)
			<tr>
				<td>
					<p>{{ $arrName[$r] }}</p>
				</td>
				@for($a=0; $a<=2; $a++)
				@php ( $que =  ($r*3)+$a )
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