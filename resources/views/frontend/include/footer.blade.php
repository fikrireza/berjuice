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