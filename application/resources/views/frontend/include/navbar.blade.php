<div class="navbar-statick">
	<div class="wrapper-nav">
		<div class="list-item-nav resposive-mobile">
			<div class="valign-midle logo">
				<a href="{{ route('frontend.home') }}">
					<img class="icon juice icon-scroller-nav" src="{{ asset('amadeo/image/base/logo-juice-united.png') }}">
					<img class="icon berri icon-scroller-nav" src="{{ asset('amadeo/image/base/logo-beri.png') }}">
				</a>
			</div>
			<div id="bar-mobile-animate" class="valign-midle">
				<i id="bar-mobile-animate-show" class="fa fa-bars" aria-hidden="true"></i>
				<i id="bar-mobile-animate-hide" class="fa fa-times" aria-hidden="true" style="display: none;"></i>
			</div>
		</div>
		<div class="list-item-nav">
			<div class="valign-midle">
				<a href="{{ route('frontend.home') }}">
					<i class="fa fa-home" aria-hidden="true"></i>
				</a>
			</div>
		</div>
		<div class="list-item-nav">
			<div class="valign-midle">
				<a href="{{ route('frontend.about') }}">
					About Us
				</a>
			</div>
		</div>
		<div class="list-item-nav dropdown">
			<div class="valign-midle">
				<a href="{{ route('frontend.product.index') }}">
					Product
				</a>
			</div>
			<div class="dropdown-content">
				<div>
					<a href="{{ route('frontend.product.view.premium-chilled') }}">
						Freshly Squeezed
					</a>
				</div>
				<div>
					<a href="{{ route('frontend.product.view.premium-chilled') }}">
						Premium Chilled
					</a>
				</div>
				<div>
					<a href="{{ route('frontend.product.view.premium-chilled') }}">
						Long Life
					</a>
				</div>

			</div>
		</div>
		<div class="list-item-nav">
			<div class="valign-midle">
				<a href="{{ route('recipe') }}">
					Recipe
				</a>
			</div>
		</div>
		<div class="list-item-nav">
			<div class="valign-midle">
				<a href="{{ route('frontend.contact') }}">
					Contact Us
				</a>
			</div>
		</div>
	</div>
</div>
