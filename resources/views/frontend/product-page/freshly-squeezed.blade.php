@extends('frontend.layout.main')

@section('title-page')
	<title>Berri Juice - FRESHLY SQUEEZED</title>
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
		height: 95vh;
	}
	#product-show h1.title{
		position: absolute;
		z-index: 1;
		right: 0;
		bottom: 50vh;	
		margin: 0 auto;
		font-size: 64px;
		text-shadow: 
			2px 0px rgb(255,255,255),
			-2px 0px rgb(255,255,255),
			0px 2px rgb(255,255,255),
			0px -2px rgb(255,255,255);
	}
	#product-show .chevron{
		position: absolute;
		bottom: 10px;
		width: 100%;
	}
	#product-show .chevron a{
		text-decoration: none;
	}
	#product-show .chevron i{
		font-size: 25px;
		display: block;
		color: rgb(255,255,255);
	}
	#product-show .chevron i:nth-child(even){
		margin-top: -10px;
	}
	#product-decription{
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
	#product-decription .display{
		 background-size: cover; 
		 background-position: center; 
		 background-repeat: no-repeat; 
		 width: 35%; 
		 height: 100vh; 
		 float: left;
	}
	#product-decription .descrip{
		float: left; 
		width: 65%; 
		position: relative; 
		padding: 0 10%;
	}
	#product-decription .descrip .content{
		display: table-cell; 
		vertical-align: middle; 
		width: 100%; 
		height: 100vh; 
		text-align: center;
	}
	#product-decription .descrip .content h1{
		color: rgb(246,184,70); 
		font-family: 'PermanentMarker';
	}
	#product-decription .descrip .content p{
		color: rgb(21,19,16); 
		font-family: 'LibreBaskerville';
		margin: 40px auto;
	}
	#product-decription .descrip .content table{
		border: 2px solid rgb(252,119,0); 
		border-radius: 20px;
	    -moz-border-radius: 20px;
		width: 100%;
	}
	#product-decription .descrip .content tr:first-child td:first-child{
		border-top-left-radius: 20px;
	}
	#product-decription .descrip .content tr:first-child td:last-child{
		border-top-right-radius: 20px;
	}
	#product-decription .descrip .content tr:last-child td:first-child{
		border-bottom-left-radius: 20px;
	}
	#product-decription .descrip .content tr:last-child td:last-child{
		border-bottom-right-radius: 20px;
	}

	#product-decription .descrip .content table tr td{
		color: rgb(84,84,84); 
		font-family: 'PermanentMarker';
		font-size: 18px;
		padding-top: 10px;
		padding-bottom: 10px;
	}
	#product-decription .descrip .content table tr:first-child td{
		font-size: 24px;
	}
	#product-decription #back-link{
		width: 80%;
		margin: 20px auto;
		text-align: center;
		position: relative;
		z-index: 1;
	}
	#product-decription #back-link a{
		color: rgb(242,176,56);
		font-family: 'LibreBaskerville';
		font-size: 26px;
	}
	.clearfix{
		padding-bottom: 130px;
	}
/* dekstop */
	@media (max-width: 480px) {
		body{
			overflow-x: hidden;
		}
		.clearfix{
			padding-bottom: 60px;
		}
		#product-show{
			height: 100vh;
		}
		#product-show h1.title{
			font-size: 27px;
			top: 10vh;
			width: 100%;
			text-align: center;
		}
		#product-show #show-product{
			height: auto;
			width: 280%;
			left: -40%;
		}
		#product-decription{
			padding-bottom: 60px;
		}
		#product-decription .display{
			width: 100%;
			height: 85vh;
			padding-bottom: 60px;
		}
		#product-decription .descrip{
			width: 100%;
		}
		#product-decription .descrip .content{
			height: auto;
		}
		#product-decription:after{
			background-size: 100%;
			height: 100px;
		}
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