@extends('frontend.layout.main')

@section('title-page')
	<title>Berri Juice - About</title>
@endsection
@section('meta-page')

@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/css/public.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/css/about.css') }}" />
@endsection

@section('content')
<div id="about" class="setup-wrapper" style="background-image: url('{{ asset('amadeo/image/base/home-about.png') }}');">
	<div class="setup-content nor-wd">
		<h1 class="title">About</h1>
		<div class="descrip">
			<p>
				For more than 22 years, PT Berri Indosari has been the pioneer in Indonesia's juice industry with vast experience in making and delivering the finest juice beverage since 1992. We provide consumers with fresh and healthy juice that delivers taste, nutrition, and consistent quality every day. PT Berri Indosari employs more than 300 employees, two manufacturing facilities and an extensive distribution network in Java and outlet island.
				The company mainly produces freshly squeezed orange (365 	days a year) and non-pasteurized fruit juice beverages.
				PT Berri Indosari understands the importance of good quality juice to enrich our daily life. That's why we serve fresh and healthy products to our consumer. We are proud and delighted to deliver the best for you.
			</p>
		</div>
	</div>
</div>

<div id="director" class="setup-wrapper" style="background-image: url('{{ asset('amadeo/image/base/director.png') }}');">
	<div class="setup-content nor-wd">
		<h1 class="title">Director’s Message</h1>
		<div class="descrip">
			<p>
				For more than 22 years, PT Berri Indosari has been the pioneer in Indonesia's juice industry with vast experience in making and delivering the finest juice beverage since 1992. We provide consumers with fresh and healthy juice that delivers taste, nutrition, and consistent quality every day. PT Berri Indosari employs more than 300 employees, two manufacturing facilities and an extensive distribution network in Java and outlet island.
				The company mainly produces freshly squeezed orange (365 	days a year) and non-pasteurized fruit juice beverages.
				PT Berri Indosari understands the importance of good quality juice to enrich our daily life. That's why we serve fresh and healthy products to our consumer. We are proud and delighted to deliver the best for you.
			</p>
		</div>
	</div>
</div>

<div id="milestones" class="setup-wrapper" style="background-image: url('{{ asset('amadeo/image/base/sky.png') }}');">
	<div class="setup-content nor-wd">
		<h1 class="title">Milestones</h1>

		@for($a=0; $a<=5; $a++)
		<div class="mil-block {{ $a==0 ? 'size-st' : 'size-nd'}}">
			<h3>2010</h3>
			<p>
				For more than 22 years, PT Berri Indosari has been the pioneer in Indonesia's juice industry with vast experience in making and delivering the finest juice
			</p>
		</div>
		@if($a==0)
		<div class="root-wrapper">
			<div class="root" style="background-image: url('{{ asset('amadeo/image/base/root.png') }}')"></div>
		</div>
		@endif
		@endfor
		<div class="clearfix"></div>
	</div>
</div>
@endsection

@section('script')

@endsection
