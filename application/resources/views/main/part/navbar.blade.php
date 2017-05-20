<div class="navbar-statick">
	<div class="wrapper-nav">
		<div class="list-item-nav resposive-mobile">
			<div class="valign-midle logo">
				<img id="icon-berri" class="icon-berri" src="{{ asset('image/base/logo-juice-united.png') }}"  onclick="location.href='{{ route('home') }}'">
			</div>
			<div id="bar-mobile-animate" class="valign-midle">
				<i id="bar-mobile-animate-show" class="fa fa-bars" aria-hidden="true"></i>
				<i id="bar-mobile-animate-hide" class="fa fa-times" aria-hidden="true" style="display: none;"></i>
			</div>
		</div>
		<div class="list-item-nav">
			<div class="valign-midle">
				<a href="{{ route('home') }}">
					<i class="fa fa-home" aria-hidden="true"></i>
				</a>
			</div>
		</div>
		<div class="list-item-nav">
			<div class="valign-midle">
				<a href="">
					About Us
				</a>
			</div>
		</div>
		<div class="list-item-nav dropdown">
			<div class="valign-midle">
				<a href="{{ route('product') }}">
					Product
				</a>
			</div>
			<div class="dropdown-content">
				<div>
					<a href="{{ route('product-in') }}">
						Freshly Squeezed
					</a>
				</div>
				<div>
					<a href="{{ route('product-in') }}">
						Premium Chilled
					</a>
				</div>
				<div>
					<a href="{{ route('product-in') }}">
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
				<a href="">
					Contact Us
				</a>
			</div>
		</div>
	</div>
</div>