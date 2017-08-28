@extends('frontend.layout.main')

@section('title-page')
	<title>Berri Juice - Recipe</title>
@endsection
@section('meta-page')

@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/css/public.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/css/recipe-view.css') }}" />
@endsection

@section('content')

<div id="recipe" class="setup-wrapper" style="background-image: url('{{ asset('amadeo/image/base/sky.jpg') }}');">
	<div class="mobile display-img" style="background-image: url('{{ asset('amadeo/image/base/recip-1.png') }}');"></div>
	<div class="setup-content nor-wd">
		<h1 class="title">Chocolate Orange Cake Recipe</h1>
		<div class="tools">
			<label class="tool">
				<span class="fa-stack fa-lg">
					<i class="fa fa-circle fa-stack-2x"></i>
					<i class="fa fa-flag fa-stack-1x fa-inverse"></i>
				</span>
				<label>Serves 12</label>
			</label>
			<label class="tool">
				<span class="fa-stack fa-lg">
					<i class="fa fa-circle fa-stack-2x"></i>
					<i class="fa fa-flag fa-stack-1x fa-inverse"></i>
				</span>
				<a href="{{ route('frontend.recipe.print') }}"><label>Print Recipe</label></a>
			</label>
		</div>
		<div class="display-img hidden-mobile" style="background-image: url('{{ asset('amadeo/image/base/recip-1.png') }}');">
		</div>
		<div class="description-wrapper">
			<p class="bold color">Ingredients:</p>
			<p class="bold">For Cake:</p>
			<p>2 tablespoons unsalted butter, softened</p>
			<p>1/2 cup plus 1 tablespoon unsweetened cocoa powder </p>
			<p>3 cups all-purpose flour </p>
			<p>1 1/2 cups granulated sugar </p>
			<p>2 teaspoons baking soda </p>
			<p>1 teaspoon salt </p>
			<p>1 teaspoon ground cinnamon </p>
			<p>2 cups freshly squeezed orange juice, plus 2 tablespoons finely grated zest</p>
			<p>3/4 cup mayonnaise </p>
			<p>2 tablespoons balsamic vinegar </p>
			<p>1 teaspoon vanilla extract </p>
			<p class="bold">For Chocolate Glaze:</p>
			<p>2 tablespoons unsalted butter, softened</p>
			<p>1/2 cup plus 1 tablespoon unsweetened cocoa powder </p>
			<p>3 cups all-purpose flour </p>
			<p>1 1/2 cups granulated sugar </p>
			<p>2 teaspoons baking soda </p>
			<p>1 teaspoon salt </p>
			<p>1 teaspoon ground cinnamon </p>
			<p>2 cups freshly squeezed orange juice, plus 2 tablespoons finely grated zest</p>
			<p>3/4 cup mayonnaise </p>
			<p>2 tablespoons balsamic vinegar </p>
			<p>1 teaspoon vanilla extract </p>
			<p class="bold color">Directions:</p>
			<p>Special equipment: a Bundt pan

			<p>For the cake: Preheat the oven to 350 degrees F. Mix together the softened butter and 1 tablespoon of the cocoa to make a thick paste. Use this paste to paint the inside of the Bundt pan. Set aside.</p>

			<p>In an electric mixer, combine the flour, granulated sugar, baking soda, salt, cinnamon and remaining 1/2 cup cocoa and mix until blended. Add the orange juice, mayonnaise, vinegar and vanilla and mix until just combined, 1 to 2 minutes. Fold in the orange zest. Pour the batter into the prepared pan and bake until a toothpick inserted in the cake comes out clean, 45 minutes. Cool in the pan for 10 minutes, and then turn out onto a cooling rack to cool completely.</p>

			<p>For the chocolate glaze: Mix the confectioners' sugar and cocoa together. Whisk in the orange juice, 1 tablespoon at a time, until it reaches a good consistency to drizzle. Drizzle the glaze over the cake.</p>
		</div>
		
		<h1 class="title hidden-mobile" style="padding-top: 10px;">Related Recipes</h1>
		<div class="wrapper-recipe">
			@for($a=1; $a<=4; $a++)
			<div class="recipe-show">
				<div class="recipe-img" style="background-image: url('{{ asset('amadeo/image/base/recip-'.$a.'.png') }}');">
					<div class="descrip-wrapper">
						<a href="{{ route('frontend.recipe.view') }}">
							<p>{{ $arrName[$a] }}</p>
						</a>
						<p>{{ $arrCate[$a] }}</p>
					</div>
				</div>
			</div>
			@endfor
			<div class="clearfix"></div>
		</div>
	</div>
</div>
@endsection

@section('script')
<script type="text/javascript">
var win = $(window);
if( win.width() > 620 ){
	$('.mobile.display-img').hide();
}
}
</script>
@endsection
