@extends('frontend.layout.main')

@section('title-page')
	<title>Juice United - Premium Chilled</title>
@endsection
@section('meta-page')

@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/css/public.css') }}" />
<style type="text/css">
#product-show{
	min-height: 100vh;
	padding-bottom: 10px;
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
	text-align: center;
}
#product-show p{
	padding-top: 60px;
	margin: 0 auto;
	width: 80%;
	height: 230px;
	text-align: center;
	line-height: 2;
	font-family: 'LibreBaskerville';
	color: rgb(0,0,0);
}
#product-show #show-product{
	margin: 0 auto;
	margin-top: 50px;
	text-align: center;
	height: 50vh;
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
#product-decription .table-description tr:first-child{
	background-color: rgb(119,188,0);
}
#product-decription .table-description tr{
	background-color: rgb(255,255,255);
}
#product-decription .table-description tr td{
	text-align: center;
	padding: 10px 25px;
}
#product-decription .table-description tr td p{
	margin: 0;
	font-family: 'LibreBaskerville';
	font-size: 16px;
}
#product-decription .table-description tr td p{
	font-family: 'PermanentMarker';
	text-transform: uppercase;
	color: rgb(242,176,56);
}
#product-decription .table-description tr:first-child td p{
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
<div id="product-show" class="setup-wrapper" style="background-image: url('{{ asset('amadeo/image/base/private-label-bg.jpg') }}');">
	<div class="setup-content nor-wd">
		<p>Lorem ipsum dolor sit amet, sit in aliquip discere. Soluta facilis duo eu. Novum laudem accusamus nam ad, duo nihil iriure malorum an. Vim graeco consequat ex. In vim nusquam percipit antiopam, epicurei officiis mediocritatem ne duo.Lorem ipsum dolor sit amet, sit in aliquip discere. Soluta facilis duo eu. Novum laudem accusamus nam ad, duo nihil iriure malorum an. Vim graeco consequat ex. In vim nusquam percipit antiopam, epicurei officiis mediocritatem ne duo.Lorem ipsum dolor sit amet, sit in aliquip discere. Soluta facilis duo eu. Novum laudem accusamus nam ad, duo nihil iriure malorum an. Vim graeco consequat ex. In vim nusquam percipit antiopam, epicurei officiis mediocritatem ne duo.</p>
		<img id="show-product" src="{{ asset('amadeo/image/base/private-label.png') }}">
		<h1 class="title">Private Label</h1>
	</div>
</div>
<div id="product-decription" class="setup-wrapper">
	<div class="setup-content nor-wd">
		<table class="table-description">
			<tr>
				<td colspan="3">
					<p>AvaiLABLE Variants</p>
				</td>
			</tr>
			@for($r=0; $r<=3; $r++)
			<tr>
				@for($a=1; $a<=3; $a++)
				@php ( $que =  ($r*3)+$a )
				<td>
					<p>Flavor {{ $que }}</p>
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