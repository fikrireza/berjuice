@extends('frontend.layout.main')

@section('title-page')
	<title>Juice United - About</title>
@endsection

@section('meta-page')
	<meta name="title" content="Juice United - About">
	<meta name="keywords" content="Juice United, Berri Juice, Vittoria Coffee"/>
	<meta name="description" content="For more than 22 years, PT Berri Indosari has been the pioneer in Indonesia's juice industry with vast experience in making and delivering the finest juice beverage since 1992 ...">

@endsection

@section('style')
	<link rel="stylesheet" type="text/css" href="{{ asset(mix('amadeo/css/mix/about.css')) }}">
	<style type="text/css">
		#milestones:before{
			content: "";
		    background-image: url('{{ asset('amadeo/image/base/leaves-up.png') }}');
		    background-size: cover;
		    background-position: center;
		    background-repeat: no-repeat;
		    position: absolute;
		    top: 0px;
		    width: 100%;
		    height: 290px;
		    z-index: 0;	
		}
		#milestones .mil-block.size-st.tree.right:before{
			content: "";
			position: absolute;
		    background-image: url('{{ asset('amadeo/image/base/root-kanan.png') }}');
		    background-size: cover;
		    background-position: center;
		    background-repeat: no-repeat;
		    bottom: -135px;
		    left: -85px;
		    width: 145px;
		    height: 135px;
		}
		#milestones .mil-block.size-st.tree.left:before{
			content: "";
			position: absolute;
		    background-image: url('{{ asset('amadeo/image/base/root-kiri.png') }}');
		    background-size: cover;
		    background-position: center;
		    background-repeat: no-repeat;
		    bottom: -115px;
		    right: -50px;
		    width: 90px;
		    height: 115px;
		    z-index: -1;
		}
	</style>
@endsection

@section('content')
	<div id="about" class="setup-wrapper" style="background-image: url('{{ asset('amadeo/image/base/about-page.jpg') }}');">
		<div class="setup-content nor-wd">
			<h1 class="title">About</h1>
			<div class="descrip">
				<p>
					For more than 22 years, PT Berri Indosari has been the pioneer in Indonesia's juice industry with vast experience in making and delivering the finest juice beverage since 1992. We provide consumers with fresh and healthy juice that delivers taste, nutrition, and consistent quality every day. PT Berri Indosari employs more than 300 employees, two manufacturing facilities and an extensive distribution network in Java and outlet island. 
				</p>
				<p>
					The company mainly produces freshly squeezed orange (365 days a year) and non-pasteurized fruit juice beverages.
				</p>
				<p>
					PT Berri Indosari understands the importance of good quality juice to enrich our daily life. That's why we serve fresh and healthy products to our consumer. We are proud and delighted to deliver the best for you.
				</p>
				<div class="text-center">
					<p>Certifications:</p>
					<img class="img" src="{{ asset('amadeo/image/base/certificate-1.png') }}">
					<img class="img" src="{{ asset('amadeo/image/base/certificate-2.png') }}">
				</div>
			</div>
		</div>
	</div>

	{{--
		<div id="factory" class="title setup-wrapper" style="background-image: url('{{ asset('amadeo/image/base/about-bg-other.jpg') }}');">
				<div class="setup-content nor-wd">
					<h1 class="title">Our Factory</h1>
				</div>
		</div>
		<div id="factory" class="content setup-wrapper" style="background-image: url('{{ asset('amadeo/image/base/about-bg-other.jpg') }}');">
			@php($arrFac = ['', 'Cikande', 'Bali'])
			@for($i=1; $i<=2; $i++)
			<div class="factory-list" style="background-image: url('{{ asset('amadeo/image/base/factory-bg-'.$i.'.jpg') }}');">
				<div class="wrapper-content">
					<h2>{!! $arrFac[$i] !!} Factory</h2>
					<div class="for-btn text-right">
						<a href="" class="btn btn-orange">More</a>
					</div>
				</div>
			</div>
			@endfor
			<div class="clearfix"></div>
		</div>
	--}}

	<div id="branches" class="setup-wrapper" style="background-image: url('{{ asset('amadeo/image/base/about-bg-other.jpg') }}');">
			<div class="setup-content nor-wd">
				<h1 class="title">Branches</h1>
			</div>
			@for($i=0; $i<=3; $i++)
			<div class="branches-list-wrapper animation-element">
				<h3>{{ $branchesTitle[$i] }}</h3>
				<p>{{ $branchesAdr[$i] }}</p>
				<p>Tel : {{ $branchesTel[$i] }}</p>
				<p>Fax : {{ $branchesFax[$i] }}</p>
			</div>
			@endfor
			<div class="clearfix"></div>
	</div>

	<div id="milestones" class="setup-wrapper" style="background-image: url('{{ asset('amadeo/image/base/sky.jpg') }}');">
		<div class="setup-content nor-wd">
			<h1 class="title">Milestones</h1>

			<div class="mil-block size-st">
				{!! $milestonesContent[0] !!}
			</div>
			<div class="root-wrapper">
				<div class="root" style="background-image: url('{{ asset('amadeo/image/base/root.png') }}')"></div>
			</div>
			<div class="mil-block size-nd">
				{!! $milestonesContent[1] !!}
			</div>
			<div class="root-wrapper hidden-in-mobile">
				<div class="root tree" style="background-image: url('{{ asset('amadeo/image/base/root-2.png') }}')"></div>
			</div>
			<div class="root-wrapper hidden-in-dekstop">
				<div class="root" style="background-image: url('{{ asset('amadeo/image/base/root.png') }}')"></div>
			</div>
			<div class="mil-block size-st tree right">
				{!! $milestonesContent[2] !!}
			</div>
			<div class="root-wrapper hidden-in-dekstop">
				<div class="root" style="background-image: url('{{ asset('amadeo/image/base/root.png') }}')"></div>
			</div>
			<div class="mil-block size-st tree left">
				{!! $milestonesContent[3] !!}
			</div>

		</div>
	</div>

	<div id="ovc" class="setup-wrapper" style="background-image: url('{{ asset('amadeo/image/base/about-bg-other.jpg') }}');">
		<div class="setup-content nor-wd">
			<h1 class="title">Our Valued Customer</h1>
			<div class="descrip">
				<div class="row">
					@for($a=0; $a<=11; $a++)
					<div class="col-md-6 col-sm-6 col-xs-6 text-center">
						<label>{{ $ovcArr[$a] }}</label>
					</div>
					@endfor
				</div>
			</div>
		</div>
	</div>

	<div id="scroll-wrapper">
		<div class="conten-wrapper">
			<div>
				<a href="#about">
					<i title="about" class="fa fa-circle-o" aria-hidden="true"></i>
				</a>
			</div>
			<div>
				<a href="#branches">
					<i title="branches" class="fa fa-circle-o" aria-hidden="true"></i>
				</a>
			</div>
			<div>
				<a href="#milestones">
					<i title="milestones" class="fa fa-circle-o" aria-hidden="true"></i>
				</a>
			</div>
			<div>
				<a href="#ovc">
					<i title="Our Valued Customer" class="fa fa-circle-o" aria-hidden="true"></i>
				</a>
			</div>
		</div>
	</div>
@endsection

@section('script')
	<script type="text/javascript">
	var win = $(window);

	if( win.width() > 620 ){
		$('.root-wrapper.hidden-in-dekstop').hide();
	}
	if( win.width() < 620 ){
		$('.root-wrapper.hidden-in-mobile').hide();
	}

	</script>
@endsection
