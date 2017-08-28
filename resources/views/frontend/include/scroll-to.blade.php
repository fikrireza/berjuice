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