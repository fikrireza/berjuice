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
iframe{
	width: 100%;
	height: 50vh;
	pointer-events: none;
}
iframe.clicked{
	pointer-events: auto;
}
@media (max-width: 480px) {
	#branches .branches-list-wrapper{
		padding: 10px 20px;
		width: 100%;
	}
}
</style>
@endsection

@section('content')

<div class="setup-wrapper">
	<div class="wrapper-maps">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6903765769434!2d106.86181131476887!3d-6.1721943955314265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMTAnMTkuOSJTIDEwNsKwNTEnNTAuNCJF!5e0!3m2!1sen!2s!4v1499846219004" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
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
		<div class="branches-list-wrapper">
			<h3>{{ $arrTitle[$i] }}</h3>
			<p>{{ $arrAdr[$i] }}</p>
			<p>Tel : {{ $arrTel[$i] }}</p>
			<p>Fax : {{ $arrFax[$i] }}</p>
		</div>
		@endfor
		<div class="clearfix"></div>
</div>
@endsection

@section('script')
<script type="text/javascript">
$('.wrapper-maps')
	.click(function(){
			$(this).find('iframe').addClass('clicked')
	})
	.mouseleave(function(){
			$(this).find('iframe').removeClass('clicked')
	});
</script>
@endsection
