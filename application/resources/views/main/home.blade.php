<!DOCTYPE html>
<html>
<head>
	
	<title>Berri Juice</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('plugin/bootstrap-3.3.7/css/bootstrap.css') }}" />
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css ">

	<script src="{{ asset('plugin/jquery/jquery-3.2.0.min.js') }}"></script>
</head>
<body>

<div class="navbar-statick">
	<div class="wrapper-nav">
		<div class="list-item-nav">
			<div class="valign-midle">
				icon in here
			</div>
		</div>
		<div class="list-item-nav">
			<div class="valign-midle">
				<a href="">
					<i class="fa fa-home" aria-hidden="true"></i>
				</a>
			</div>
		</div>
		<div class="list-item-nav">
			<div class="valign-midle">
				<a href="">
					About Us
				</a>
			</div>
		</div>
		<div class="list-item-nav">
			<div class="valign-midle">
				<a href="">
					Product
				</a>
			</div>
		</div>
		<div class="list-item-nav">
			<div class="valign-midle">
				<a href="">
					Recipe
				</a>
			</div>
		</div>
		<div class="list-item-nav">
			<div class="valign-midle">
				<a href="">
					Contact Us
				</a>
			</div>
		</div>
	</div>
</div>


<!-- Important Owl stylesheet -->
<link rel="stylesheet" href="{{ asset('plugin/owl-carousel/owl.carousel.css') }}">
<!-- Default Theme -->
<link rel="stylesheet" href="{{ asset('plugin/owl-carousel/owl.theme.css') }}">
<!-- Include js plugin -->
<script src="{{ asset('plugin/owl-carousel/owl.carousel.js') }}"></script>

<div class="owl-slide-one-image-fluid">
	<div class="item">
		<div class="wrapper-image-background" style="background-image: url('{{ asset('image/base/owl-1.png') }}');">
			
		</div>
	</div>
	<div class="item">
		<div class="wrapper-image-background" style="background-image: url('{{ asset('image/base/owl-2.png') }}');">
			
		</div>
	</div>

</div>

<div class="home-content-berri">
	<div class="background background-1st" style="background-image: url('{{ asset('image/base/bg-buah.png') }}')">
	</div>
	<div class="background background-2sd" style="background-image: url('{{ asset('image/base/bg-orange-gradian-line.png') }}')">
	</div>
	<div class="background background-3th" style="background-image: url('{{ asset('image/base/bg-buah.png') }}')">
	</div>
	<div class="wrapper-content-berri">
		<div class="who-we-are" style="margin: 0 auto; width: 75%;">
			<h1 style="text-align: center;">Who We Are</h1>
			<div class="row">
				<div class="col-md-6">
					<p style="text-indent: 50px; text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
				</div>
				<div class="col-md-6">
					<img src="{{ asset('image/base/owl-2.png') }}" style="width: 100%">
				</div>

			</div>
		</div>
		<div class="where-to-find-us">
			
		</div>
		<div class="recipe">
			
		</div>

	</div>

</div>

<script type="text/javascript">
$(document).ready(function() {
 
  $(".owl-slide-one-image-fluid").owlCarousel({
 
      navigation : false, // Show next and prev buttons
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true
 
  });
 
});
</script>

<style type="text/css">
.home-content-berri{
	position: relative;
}
.home-content-berri .background{
	background-attachment: ;
	background-repeat: repeat-x;
	background-size: cover;
}
.home-content-berri .background-1st{
	height: 200px;
}
.home-content-berri .background-2sd{
	height: 200px;
	
}
.home-content-berri .background-3th{
	height: 200px;
	
}
.home-content-berri .wrapper-content-berri{
	position: relative;
	margin-top: -500px;
	margin-left: auto;
	margin-right: auto;
	width: 100%;
	background: rgba(0,0,0,0);
	height: 500px;
}


.navbar-statick{
	z-index: 1;
	background:rgba(0,0,0,0);
	position: relative;
}
.navbar-statick .wrapper-nav{
	margin: 0 auto;
	text-align: center;
}
.navbar-statick .wrapper-nav .list-item-nav{
	height: 60px;
	padding: 0px 20px;
	display: inline-block;
}
.navbar-statick .wrapper-nav .list-item-nav .valign-midle{
	height: 60px;
	display: table-cell;
	vertical-align: middle;
}
.navbar-statick .wrapper-nav .list-item-nav .valign-midle a{
	color: rgb(255,255,255);
	text-decoration: none;
	text-shadow: 1px 1px 1px rgb(0,0,0);
	font-size: 16px;
	font-family: 'Myriad Pro';
	cursor: pointer;
}
.navbar-statick .wrapper-nav .list-item-nav .valign-midle i{
	color: rgb(255,255,255);
	text-decoration: none;
	text-shadow: 1px 1px 1px rgb(0,0,0);
	font-size: 16px;
	cursor: pointer;
}

.owl-slide-one-image-fluid{
	margin-top: -65px;
}
.owl-slide-one-image-fluid .wrapper-image-background{
	height: 680px;
	width: 100%;
	background-repeat: no-repeat;
	background-size: cover;
}
.owl-slide-one-image-fluid .owl-pagination{
	position: relative;
	margin-top: -50px;
}
.owl-slide-one-image-fluid .owl-controls .owl-pagination .owl-page span{
	background: rgb(255,255,255);
}
.owl-slide-one-image-fluid .owl-controls .owl-pagination .active span{
	background: rgb(246,182,68);
}
</style>

	<script src="{{ asset('plugin/angular-1.6/angular.min.js') }}"></script>
	<script src="{{ asset('plugin/bootstrap-3.3.7/js/bootstrap.min.js') }}"></script>
</body>
</html>