<style type="text/css">
#scroll-wrapper{
	position: fixed; 
	right: 0;
	top: 0;
	height: 100vh;
	display: table;
}
#scroll-wrapper .conten-wrapper{
	display: table-cell;
	height: 100vh;
	vertical-align: middle;
}
#scroll-wrapper .conten-wrapper div{
	padding-right: 10px;
}
#scroll-wrapper .conten-wrapper div i{
	color: rgb(255,255,255);
	font-size: 16px;
	padding-bottom: 10px;
}
#scroll-wrapper .conten-wrapper div i:hover{
	color: rgb(246,184,70);
}
</style>
<div id="scroll-wrapper">
	<div class="conten-wrapper">
		<div>
			<a href="#banner-slider">
				<i title="banner-slider" class="fa fa-circle-o" aria-hidden="true"></i>
			</a>
		</div>
		<div>
			<a href="#about">
				<i title="about" class="fa fa-circle-o" aria-hidden="true"></i>
			</a>
		</div>
		@php ( $arrUrl = ['', 'freshly-squeezed', 'premium-chilled', 'victtoria-coffe'])
		@for($a=1; $a<=3; $a++)
		<div>
			<a href="#product-{{ $arrUrl[$a].'-'.$a }}">
				<i title="product-{{ $arrUrl[$a].'-'.$a }}" class="fa fa-circle-o" aria-hidden="true"></i>
			</a>
		</div>
		@endfor
		<div>
			<a href="#wtfu">
				<i title="Where To Find Us" class="fa fa-circle-o" aria-hidden="true"></i>
			</a>
		</div>
	</div>
</div>