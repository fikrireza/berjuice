@extends('frontend.layout.main')

@section('title-page')
	<title>Berri Juice - Contact</title>
@endsection
@section('meta-page')

@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/css/public.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/css/contact.css') }}" />
<style type="text/css">
	#branches{
		margin-top: -5px;
	}
	#branches h1.title{
		margin: 0;
		padding: 30px 0px;
	}
	#branches .branches-list-wrapper{
		float: left;
		margin: 0;
		text-align: center;
		padding: 20px 10%;
		width: 50%;
	}
	#branches .branches-list-wrapper h3{
		color: rgb(99,99,99);
	    font-family: 'PermanentMarker';
	}
	#branches .branches-list-wrapper p{
		color: rgb(99,99,99);
		font-family: 'LibreBaskerville';
	}
	iframe#maps{
		width: 100%;
		height: 50vh;
		pointer-events: none;
	}
	iframe.clicked{
		pointer-events: auto;
	}
	form button{
		float: left;
	}
	form .g-recaptcha{
		float: right;
		visibility: hidden;
		opacity: 0;
		transition: all 2.51s;
	}
	form .g-recaptcha.active{
		visibility: visible;
		opacity: 1;
	}
	@media (max-width: 480px) {
		#branches .branches-list-wrapper{
			padding: 10px 20px;
			width: 100%;
		}
	}
</style>
	<script src='https://www.google.com/recaptcha/api.js'></script>
@endsection

@section('content')

<div class="setup-wrapper">
	<div class="wrapper-maps">
		<iframe id="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.4096047806356!2d106.62833971476904!3d-6.209582895504822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x320687ba53b4daa!2sPT.+Berri+Indosari!5e0!3m2!1sen!2sus!4v1503296702902" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
</div>

<div id="branches" class="setup-wrapper" style="background-image: url('{{ asset('amadeo/image/base/about-bg-other.jpg') }}');">
		<div class="setup-content nor-wd">
			<h1 class="title">Branches</h1>
		</div>
		@for($i=0; $i<=3; $i++)
		<div class="branches-list-wrapper">
			<h3>{{ $branchesTitle[$i] }}</h3>
			<p>{{ $branchesAdr[$i] }}</p>
			<p>Tel : {{ $branchesTel[$i] }}</p>
			<p>Fax : {{ $branchesFax[$i] }}</p>
		</div>
		@endfor
		<div class="clearfix"></div>
</div>

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
				<form id="contact-form" method="post" action="{{ route('frontend.contact.store') }}">
					{{ csrf_field() }}
					@if(Session::has('alert'))
						<script>
						  window.setTimeout(function() {
						    $(".alert.alert-dismissible").fadeTo(700, 0).slideUp(700, function(){
						        $(this).remove();
						    });
						  }, 5000);
						</script>
						<div class="alert {{ Session::get('alert') }} alert-dismissible fade in" role="alert">
					      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
					      </button>
					      <strong>{{ Session::get('info') }}</strong>
					    </div>
					@endif
					@if($errors->has('email'))
						<code><span style="color:red; font-size:12px;">{{ $errors->first('email')}}</span></code>
					@endif
					<input 
						name="email" 
						type="text" 
						class="form-control" 
						placeholder="Email Address*"
						value="{{ old('email') }}" 
						{{ Session::has('autofocus') ? 'autofocus' : ''}}
					>
					@if($errors->has('name'))
						<code><span style="color:red; font-size:12px;">{{ $errors->first('name')}}</span></code>
					@endif
					<input 
						name="name" 
						type="text" 
						class="form-control" 
						placeholder="Your Name*"
						value="{{ old('name') }}" 
					>
					@if($errors->has('message'))
						<code><span style="color:red; font-size:12px;">{{ $errors->first('message')}}</span></code>
					@endif
					<textarea 
						name="message" 
						class="form-control" 
						placeholder="Message" 
						rows="10"
					>{{ old('message') }}</textarea>
					<button class="btn btn-orange" type="button">
						Submit
					</button>
						<div class="g-recaptcha" data-sitekey="6LcoAS4UAAAAAHQ-NpZB7oZIeQ_IH-BUL6NuZqpw" data-callback="submitThisForm"></div>
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
<script type="text/javascript">
$('.wrapper-maps')
	.click(function(){
		$(this).find('iframe#maps').addClass('clicked')
	})
	.mouseleave(function(){
		$(this).find('iframe#maps').removeClass('clicked')
	});
$('button.btn.btn-orange')
	.click(function(){
		$(this).hide();
		$("div.g-recaptcha").addClass('active');
	});
</script>
<script type="text/javascript">
function submitThisForm(){
	$("form#contact-form").submit();
}
</script>
@endsection
