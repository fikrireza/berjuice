<!DOCTYPE html>
<html>
<head>
	
	<title>Berri Juice</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('plugin/bootstrap-3.3.7/css/bootstrap.css') }}" />
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css ">
	
	<link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/public.css') }}" />

	<link rel="stylesheet" type="text/css" href="{{ asset('font/1-font-family.css') }}" />

	<script src="{{ asset('plugin/jquery/jquery-3.2.0.min.js') }}"></script>
	
</head>
<body>

<div class="navbar-statick">
	<div class="wrapper-nav">
		<div class="list-item-nav">
			<div class="valign-midle">
				<a href="">
					<img class="icon-berri" src="{{ asset('image/base/logoberi.png') }}">
				</a>
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
	<div class="wrapper-content-berri">
		<div class="who-we-are">
			<h1 class="title">Who We Are</h1>
			<div class="row">
				<div class="description col-md-6">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
					<div class="for-btn-more">
						<a class="btn-berri-dft" href="#">
							More
						</a>
					</div>
				</div>
				<div class="text-center col-md-6">
					<img class="img-who-we-are" src="{{ asset('image/base/owl-2.png') }}">
				</div>

			</div>
		</div>
		<div class="where-to-find-us">
			<h1 class="title">WHERE TO FIND US</h1>
			<div class="row row-find-us">
				<div class="col-md-4">
					<div class="wrapper-find-us">
						<div class="bg-pict" style="background-image: url('{{ asset('image/base/pic-ju-1.jpg') }}')">
							<img class="logo-find-us" src="{{ asset('image/base/logofb.png') }}">	
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="wrapper-find-us">
						<div class="bg-pict" style="background-image: url('{{ asset('image/base/pic-ju-2.jpg') }}')">
							<img class="logo-find-us" src="{{ asset('image/base/logoinstag.png') }}">	
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="wrapper-find-us">
						<div class="bg-pict" style="background-image: url('{{ asset('image/base/pic-ju-1.jpg') }}')">
							<img class="logo-find-us" src="{{ asset('image/base/logotwit.png') }}">	
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="recipe">
			<div class="line-center-gradiane-color">
			</div>

			<h1 class="title">Recipe</h1>

			<div class="recipe-list">
				<div class="col-md-3 recipe-item">
					<div class="recipe-pic" style="background-image: url('{{ asset('image/base/pic-ju-1.jpg') }}')">
						
					</div>	
					<h3>Some text</h3>
				</div>
				<div class="col-md-3 recipe-item">
					<div class="recipe-pic" style="background-image: url('{{ asset('image/base/pic-ju-2.jpg') }}')">
						
					</div>	
					<h3>Some text</h3>
				</div>
				<div class="col-md-3 recipe-item">
					<div class="recipe-pic" style="background-image: url('{{ asset('image/base/pic-ju-1.jpg') }}')">
						
					</div>	
					<h3>Some text</h3>
				</div>
				<div class="col-md-3 recipe-item">
					<div class="recipe-pic" style="background-image: url('{{ asset('image/base/pic-ju-2.jpg') }}')">
						
					</div>	
					<h3>Some text</h3>
				</div>

			</div>
		</div>

	</div>
	<div class="wrapper-background">
		<div class="background background-1st" style="background-image: url('{{ asset('image/base/bg-buah.png') }}')">
		</div>
		<div class="background background-2sd" style="background-image: url('{{ asset('image/base/bg-orange-gradian-line-littel.png') }}')">
		</div>
		<div class="background background-3th" style="background-image: url('{{ asset('image/base/bg-buah.png') }}')">
		</div>
	</div>
		

</div>
<div class="clearfix">
	
</div>
<div class="product" style="background-image: url('{{ asset('image/base/bg-orange-gradian-line.png') }}');">
		<h1 class="title">
			Product
		</h1>
		<div class="product-item-list-wrapper product-item-list-1st">
			<img class="picture" src="{{ asset('image/base/product-3.png') }}">
			<div class="description">
				"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,"
			</div>
			<div class="clearfix"></div>
			<h1 class="product-name">
				Freshly Squeezed
			</h1>
		</div>
		
		<div class="clearfix"></div>

		<div class="product-item-list-wrapper product-item-list-2nd">
			<div class="description">
				"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,"
			</div>
			<img class="picture" src="{{ asset('image/base/product-2.png') }}">
			<div class="clearfix"></div>
			<h1 class="product-name">
				Premium Chilled
			</h1>
		</div>

		<div class="clearfix"></div>

		<div class="product-item-list-wrapper product-item-list-3th">
			<img class="picture" src="{{ asset('image/base/product-1.png') }}">
			<div class="description">
				"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,"
			</div>
			<div class="clearfix"></div>
			<h1 class="product-name">
				Ambient
			</h1>
		</div>

		<div class="clearfix"></div>

		<div class="for-btn-all-product">
			<a class="btn-berri-dft" href="#">
				All Product
			</a>
		</div>

		<div class="line-center-gradiane-white"></div>
		
		<div class="contact-us">
			<h1 class="title">
				Contact Us
			</h1>
			<div class="row">
				<div class="col-md-6 description">
					<p>Komplek BNI no 23 Tubagus angke</p>
					<p>Jakarta Barat 25463</p>
					<p>Phone: 01926 330073</p>
					<div>
						<img src="{{ asset('image/base/logofb.png') }}"><label>juiceunited</label>
					</div>
					<br>
					<div>
						<img src="{{ asset('image/base/logoinstag.png') }}"><label>juiceunited</label>
					</div>
				</div>
				<div class="col-md-6 form-contact">
					<form>
						<input type="text" class="form-control" placeholder="Email Address*">
						<input type="text" class="form-control" placeholder="Your Name*">
						<textarea class="form-control" placeholder="Message" rows="10"></textarea>
						<button class="btn-submit">
							Submit
						</button>
					</form>
				</div>
			</div>
		</div>

		<div class="for-web-devlop">
			<p>© 2017 Juice United</p>
			<p>Web Developer By <img src="{{ asset('image/base/amadeo.png') }}"></p>
		</div>
</div>

<div class="footer">
	<div class="float-left">
		<div class="wrapper-footer">
			<label><b>CONTACT WITH US</b></label>
		</div>
	</div>
	<div class="float-left border-gradian-right">
		<div class="wrapper-footer">
			<label>
				<img class="logo-contact-us-footer" src="{{ asset('image/base/logofb-red.png') }}">	
				<img class="logo-contact-us-footer" src="{{ asset('image/base/logoinstag-red.png') }}">	
				<img class="logo-contact-us-footer" src="{{ asset('image/base/logotwit-red.png') }}">
			</label>
		</div>
	</div>
	<div class="float-left">
		<div class="wrapper-footer">
			<label>Online Purchase Through</label>
		</div>
	</div>
	<div class="float-left border-gradian-right">
		<div class="wrapper-footer">
			<label>
				<img class="logo-contact-us-footer" src="{{ asset('image/base/logohappyfresh.png') }}">
			</label>
		</div>
	</div>
	<div class="float-left">
		<div class="wrapper-footer">
			<label>We would love to hear from you! <b>Send Feedback.</b></label>
		</div>
	</div>
	
	<div class="float-right border-gradian-right">
		<div class="wrapper-footer">
			<label>Carees</label>
		</div>
	</div>
	<div class="float-right border-gradian-right">
		<div class="wrapper-footer">
			<label>F.A.Q</label>
		</div>
	</div>
	<div class="float-right border-gradian-right">
		<div class="wrapper-footer">
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

	<script src="{{ asset('plugin/angular-1.6/angular.min.js') }}"></script>
	<script src="{{ asset('plugin/bootstrap-3.3.7/js/bootstrap.min.js') }}"></script>
</body>
</html>