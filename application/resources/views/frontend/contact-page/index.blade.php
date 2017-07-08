@extends('frontend.layout.main')

@section('title-page')
	<title>Berri Juice - Contact</title>
@endsection
@section('meta-page')

@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/css/public.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/css/contact.css') }}" />
@endsection

@section('content')
<div id="contact-us" class="setup-wrapper" style="background-image: url('{{ asset('amadeo/image/base/sakura.png') }}');">
	<div class="setup-content lar-wd">
		<h1 class="title">
			Contact Us
		</h1>
		<div class="row">
			<div class="col-md-6 description">
				<p>Komplek BNI no 23 Tubagus angke</p>
				<p>Jakarta Barat 25463</p>
				<p>Phone: 01926 330073</p>
				<div>
					<a href="#">
						<span class="fa-stack fa-lg">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
						</span>
						<label>juiceunited</label>
					</a>
				</div>
				<br>
				<div>
					<a href="#">
						<span class="fa-stack fa-lg">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
						</span>
						<label>juiceunited</label>
					</a>
				</div>
			</div>
			<div class="col-md-6 form-contact">
				<form>
					<input type="text" class="form-control" placeholder="Email Address*">
					<input type="text" class="form-control" placeholder="Your Name*">
					<textarea class="form-control" placeholder="Message" rows="10"></textarea>
					<button class="btn btn-orange">
						Submit
					</button>
				</form>
			</div>
		</div>

		<div class="for-web-devlop">
			<p>© 2017 Juice United</p>
			<p>Web Developer By <a href="http://amadeo.id/"><img src="{{ asset('amadeo/image/base/amadeo.png') }}"></a></p>
		</div>
	</div>
</div>
@endsection

@section('script')

@endsection
