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
<div id="about" class="setup-wrapper" style="background-image: url('{{ asset('amadeo/image/base/about-page.jpg') }}');">
	<div class="setup-content nor-wd">
		<h1 class="title">About</h1>
		<div class="descrip">
			<p>
				For more than 22 years, PT Berri Indosari has been the pioneer in Indonesia's juice industry with vast experience in making and delivering the finest juice beverage since 1992. We provide consumers with fresh and healthy juice that delivers taste, nutrition, and consistent quality every day. PT Berri Indosari employs more than 300 employees, two manufacturing facilities and an extensive distribution network in Java and outlet island.
				The company mainly produces freshly squeezed orange (365 	days a year) and non-pasteurized fruit juice beverages.
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

<div id="factory" class="title setup-wrapper" style="background-image: url('{{ asset('amadeo/image/base/about-bg-other.jpg') }}');">
		<div class="setup-content nor-wd">
			<h1 class="title">Our Factory</h1>
		</div>
</div>
<div id="factory" class="content setup-wrapper" style="background-image: url('{{ asset('amadeo/image/base/about-bg-other.jpg') }}');">
	@php($arrFac = ['', 'Cikande', 'Cikande'])
	@for($i=1; $i<=2; $i++)
	<div class="factory-list" style="background-image: url('{{ asset('amadeo/image/base/factory-bg-'.$i.'.jpg') }}');">
		<div class="wrapper-content">
			<h2>{!! $arrFac[$i] !!}</h2>
			<div class="for-btn text-right">
				<a href="" class="btn btn-orange">More</a>
			</div>
		</div>
	</div>
	@endfor
	<div class="clearfix"></div>
</div>

<div id="branches" class="setup-wrapper" style="background-image: url('{{ asset('amadeo/image/base/about-bg-other.jpg') }}');">
		<div class="setup-content nor-wd">
			<h1 class="title">Branches</h1>
		</div>
		@php
			$arrTitle = ['Head Office', 'Bali', 'Surabaya', 'Bandung'];
			$arrAdr	= ['Jl. MH. Thamrin, Komp. Mahkota Mas Blok J No. 61 
Cikokol - Tangerang 15117, Indonesia', 'Jl. Dharmawangsa No. 18 Kampial, Nusa Dua 
Bali 80383, Indonesia', 'Ruko Rungkut Megah Raya
Jl. Kalirungkut No. 6 ', 'Bizzpark Commercial Estate Jl. Kopo No. 455, Blok AA6 No. 16
Kopo - Bandung 40227'];
			$arrTel = ['(62-21) 554 3050, 554 3056', '(62-361) 774 707, 774 706, 774 705, 774 702', '(62-31) 870 9229, 872 0843', '(62-22) 8888 6781'];
			$arrFax = ['(62-21) 554 3057, 554 3058', '(62-361) 774 704', '(62-31) 879 8589', '(62-22) 8888 6782']
		@endphp
		@for($i=0; $i<=3; $i++)
		<div class="branches-list-wrapper animation-element">
			<h3>{{ $arrTitle[$i] }}</h3>
			<p>{{ $arrAdr[$i] }}</p>
			<p>Tel : {{ $arrTel[$i] }}</p>
			<p>Fax : {{ $arrFax[$i] }}</p>
		</div>
		@endfor
		<div class="clearfix"></div>
</div>

<div id="milestones" class="setup-wrapper" style="background-image: url('{{ asset('amadeo/image/base/sky.jpg') }}');">
	<div class="setup-content nor-wd">
		<h1 class="title">Milestones</h1>

		<div class="mil-block size-st">
			<h3>1992</h3>
			<p>
				Joint-Venture company with National Foods Limited Australia. We are the pioneer in Indonesian Juice market with vast experience, technology and quality assurance of Berri Australia in making and delivering the finest juice beverage since 1992
			</p>
		</div>
		<div class="root-wrapper">
			<div class="root" style="background-image: url('{{ asset('amadeo/image/base/root.png') }}')"></div>
		</div>
		<div class="mil-block size-nd">
			<h3>2011</h3>
			<p>
				Armed with decade of experience in F&B industry, combined with extensive knowledge, technology, quality assurance, and supply chain of local market, PT. Berri Indosari initiate the major product innovation under "Juice United" brand. This initiative is aimed primarily to better cater & serve Indonesian unique market demand so as to better fit the local palate and preferences.
			</p>
			<p>
				Since its inception, PT. Berri Indosari have proven strong foundation of success by consistently provide consumers with high quality, rich, nutritious, fresh and healthy juice on daily basis. The good relationship between the company and Berri Australia remain strong, further proven by the grant of sole distributorship of Berri Brand for UHT Juices.
			</p>
			<p>
				PT. Berri Indosari currently employs more than 300 employees, two manufacturing facilities and an extensive distribution network in Java and outer island. The company primary business focus is on production of freshly squeezed orange (365 days a year) and non–pasteurized chilled fruit juice.
			</p>
		</div>
		<div class="root-wrapper">
			<div class="root" style="background-image: url('{{ asset('amadeo/image/base/root.png') }}')"></div>
		</div>
		<div class="mil-block size-st">
			<h3>2016</h3>
			<p>
				Obtained HACCP (Hazard Analysis and Critical Control Points) certification for food safety management and product quality from Tuv nord for both production facilities in Cikande and Bali
			</p>
		</div>
		<div class="root-wrapper">
			<div class="root" style="background-image: url('{{ asset('amadeo/image/base/root.png') }}')"></div>
		</div>
		<div class="mil-block size-st">
			<h3>2017</h3>
			<p>
				Obtained ISO 22000:2005 certification from Tuv Nord for both production facilities located in Cikande and Bali; Obtained distributorship of Vittoria Coffee for Indonesia.
			</p>
		</div>

	</div>
</div>

<div id="ovc" class="setup-wrapper" style="background-image: url('{{ asset('amadeo/image/base/about-bg-other.jpg') }}');">
	<div class="setup-content nor-wd">
		<h1 class="title">Our Valued Customer</h1>
		<div class="descrip">
			<div class="row">
				@for($a=0; $a<=11; $a++)
				<div class="col-md-6 col-sm-6 text-center">
					<label>Hypermart</label>
				</div>
				@endfor
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')

@endsection
