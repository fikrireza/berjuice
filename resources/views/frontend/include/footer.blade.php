@if(!Route::is('frontend.home') and !Route::is('frontend.product*') and !Route::is('frontend.recipe*') and !Route::is('frontend.about*') )
<div id="contact-us" class="setup-wrapper" style="background-image: url('{{ asset('amadeo/image/base/sakura.jpg') }}');">
	<div class="setup-content lar-wd">
		<h1 class="title">
			Contact Us
		</h1>
		<div class="row">
			<div class="col-md-6 description">
				<p>Jl. MH Thamrin, Komplek Mahkota Mas</p>
				<p>Blok. J/61, Kec. Tangerang, 15117</p>
				<p>Phone: (021) 5543050</p>
				<div>
					<a href="#">
						<span class="fa-stack fa-lg">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-globe fa-stack-1x fa-inverse"></i>
						</span>
						<label>www.juiceunited.com</label>
					</a>
				</div>
				<br>
				<div>
					<a href="https://www.facebook.com/Juiceunited/">
						<span class="fa-stack fa-lg">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
						</span>
						<label>
							<a href="https://www.facebook.com/Juiceunited/">
								Facebook
							</a>
						</label>
					</a>
				</div>
				<br>
				<div>
					<a href="https://instagram.com/Juiceunited/">
						<span class="fa-stack fa-lg">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
						</span>
						<label>
							<a href="https://instagram.com/Juiceunited/">
								Instagram
							</a>
						</label>
					</a>
				</div>
				<br>
				<div>
					<a href="#">
						<span class="fa-stack fa-lg">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
						</span>
						<label>info@juiceunited.com</label>
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
@endif
<div class="footer">
	<div class="float-left">
		<div class="wrapper-footer resposive-mobile-out">
			<label><b>Connect With Us</b></label>
		</div>
	</div>
	<div class="float-left border-gradian-right resposive-mobile-out">
		<div class="wrapper-footer">
			@php
				$arrIcon = [
					'logofb',
					'logoinstag',
					'logotwit'
				];
				$arrUrl = [
					'https://www.facebook.com/Juiceunited/',
					'https://www.instagram.com/Juiceunited/',
					'https://twitter.com/Juiceunited/'

				];
			@endphp
			<label>
				@for($a=0; $a<=2; $a++)
				<a href="{{ $arrUrl[$a] }}">
					<img class="logo-contact-us-footer" src="{{ asset('amadeo/image/base/'.$arrIcon[$a].'-red.png') }}">
				</a>
				@endfor
			</label>
		</div>
	</div>
	<div class="float-left resposive-mobile-out">
		<div class="wrapper-footer">
			<label>Online Purchase Through</label>
		</div>
	</div>
	<div class="float-left border-gradian-right resposive-mobile-out">
		<div class="wrapper-footer">
			<label>
				<a href="https://www.happyfresh.id/">
					<img class="logo-contact-us-footer" src="{{ asset('amadeo/image/base/logohappyfresh.png') }}">
				</a>
			</label>
		</div>
	</div>
	<div class="float-left resposive-mobile-in">
		<div class="wrapper-footer">
			<label>
				Online Purchase Through
				<a href="https://www.happyfresh.id/">
					<img class="logo-contact-us-footer" src="{{ asset('amadeo/image/base/logohappyfresh.png') }}">
				</a>
			</label>
		</div>
	</div>
	<div class="float-left">
		<div class="wrapper-footer">
			<label>We would love to hear from you! <b>Send Feedback.</b></label>
		</div>
	</div>

	{{--
	<div class="float-right border-gradian-right resposive-mobile-out">
		<div class="wrapper-footer">
			<label>Careers</label>
		</div>
	</div>
	<div class="float-right border-gradian-right resposive-mobile-out">
		<div class="wrapper-footer">
			<label>F.A.Q</label>
		</div>
	</div>
	--}}

	<div class="float-left resposive-mobile-in">
		<div class="wrapper-footer">
			<label>
				Copyright © 2017, PT. Berri Indosari
			</label>
		</div>
	</div>
</div>