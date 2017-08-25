@extends('frontend.layout.main')

@section('title-page')
	<title>Berri Juice - VICTTORIA COFFEE</title>
@endsection
@section('meta-page')

@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/css/public.css') }}" />
<style type="text/css">
/* dekstop */
	#product-show{
		height: 100vh;
		background-size: cover;
		background-position: center;
		background-repeat: no-repeat;
		text-align: center;
	}
	#product-show  .setup-content{
		height: 100vh;
	}
	#product-show #show-product{
		position: absolute;
		bottom: 0;
		left: 0;
		width: 100%;
		height: 75vh;
	}
	#product-show h1.title{
		position: absolute;
		z-index: 1;
	    width: 100%;
	    bottom: 16vh;
		margin: 0 auto;
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
		background-attachment: fixed;
	}
	#product-decription .wrapper-prod-descr{
		position: absolute;
		width: 35%;
		text-align: center;
	}
	#product-decription .wrapper-prod-descr h3{
	    font-family: 'LibreBaskerville';
	    font-weight: 'bold';
	    text-decoration: underline;
		margin: 0;
		margin-bottom: 20px;
	}
	#product-decription .wrapper-prod-descr p{
		font-family: 'LibreBaskerville';
	}
	#product-decription .wrapper-prod-descr.Beans{
	    top: 140px;
	    left: 31%;
	}
	#product-decription .wrapper-prod-descr.Beans h3,
	#product-decription .wrapper-prod-descr.Beans p{
		color: rgb(255,255,255);
		text-shadow: 1px 1px 15px rgb(0,0,0);
	}
	#product-decription .wrapper-prod-descr.Ground{
	    bottom: 120px;
	    left: 31%;
	}
	#product-decription .wrapper-prod-descr.Ground h3,
	#product-decription .wrapper-prod-descr.Ground p{
		color: rgb(255,255,255);
		text-shadow: 1px 1px 15px rgb(0,0,0);
	}
	#product-decription .wrapper-prod-descr.Capsule{
	    top: 40vh;
	    left: 3%;
	}
	#product-decription .wrapper-prod-descr.CapinoCapsuleMachine h3,
	#product-decription .wrapper-prod-descr.CapinoCapsuleMachine p{
		color: rgb(1,1,1);
		text-shadow: 1px 1px 15px rgb(0,0,0);
	}
	#product-decription .wrapper-prod-descr.CapinoCapsuleMachine{
	    bottom: 30vh;
	    right: 3%;
	}
	#product-decription .wrapper-prod-descr.CapinoCapsuleMachine h3,
	#product-decription .wrapper-prod-descr.CapinoCapsuleMachine p{
		color: rgb(1,1,1);
		text-shadow: 1px 1px 15px rgb(0,0,0);
	}

	#product-table{
		background-color: rgb(0,0,0);
		min-height: 100vh;
		padding-top: 60px;
		padding-bottom: 60px;
	}
	#product-table .setup-content{
		z-index: 2;
	}
	#product-table .setup-content h1.title{
		color: rgb(255,255,255);
		margin-bottom: 40px;
	}
	#product-table .table-description{
		width: 70%;
		margin: 0 auto;
		margin-bottom: 60px;
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
	#product-table .table-description tr td img{
		width: 25px;
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
/* dekstop */
@media (max-width: 480px) {
	body{
		overflow-x: hidden;
	}
	#product-show{
		height: 100vh;
	}
	#product-show h1.title{
		font-size: 40px;
		left: 0px;
		right: 0px;
		bottom: 75vh;
		margin: 0px auto;
	}
	#product-table .setup-content{
		width: 85%;
	}
	#product-show #show-product{
		height: auto;
		width: 185%;
	    left: -70%;
	}
	#product-decription .wrapper-prod-descr{
		top: 50px !important;
		width: 100% !important;
		left: 0 !important;
		right: 0 !important;
		padding: 0 50px !important;
	}
	#product-decription .wrapper-prod-descr h3,
	#product-decription .wrapper-prod-descr p{
		color: rgb(255,255,255) !important;
	}
	#product-table p.description{
		width: 100%;
	}
	#product-table .table-description{
		width: 100%;
	}
	#product-table .table-description tr td{
		padding: 5px;
	}
	#product-table .table-description tr td p{
		font-size: 12px;
	}
}
</style>
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