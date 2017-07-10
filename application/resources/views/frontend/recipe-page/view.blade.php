@extends('frontend.layout.main')

@section('title-page')
	<title>Berri Juice - Recipe</title>
@endsection
@section('meta-page')

@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/css/public.css') }}" />
<style type="text/css">
#recipe{
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
}
#recipe:before{
	content: "";
    background-image: url('{{ asset('amadeo/image/base/leaves-up.png') }}');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    position: absolute;
    top: 0px;
    width: 100%;
    height: 290px;
    z-index: 1;
}
#recipe .setup-content{
	background-color: rgb(255,255,255);

}
#recipe .setup-content h1.title{
	padding-top: 120px;
	margin-top: 0;
	margin-bottom: 15px;
	position: relative;
	z-index: 5;
}
#recipe .setup-content .tools{
	position: relative;
	width: 45%;
	margin: 0 auto;
	margin-bottom: 40px;
	text-align: center;
	z-index: 5;
}
#recipe .setup-content .tools .tool{
	margin-left: 20px;
	margin-right: 20px;
}
#recipe .setup-content .tools .tool .fa-circle,
#recipe .setup-content .tools .tool label{
	color: rgb(246,184,70);
}
#recipe .setup-content .tools .tool .fa-inverse{
	color: rgb(255,255,255);
}
#recipe .setup-content .display-img{
	width: 100%;
	height: 60vh;
	background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    margin-bottom: 60px;
}
#recipe .setup-content .description-wrapper{
	position: relative;
	padding-bottom: 20px;
	width: 80%;
	margin: 0 auto;
	text-align: center;
}
#recipe .setup-content .description-wrapper p{
	font-family: 'LibreBaskerville';
}
#recipe .setup-content .description-wrapper p.bold{
	font-weight: bold;
}
#recipe .setup-content .description-wrapper p.color{
	color: rgb(246,184,70);
}
#recipe .setup-content .wrapper-recipe{
	position: relative;
	padding-left: 10px;
	padding-right: 10px;
}
#recipe .setup-content .wrapper-recipe .recipe-show{
	float: left;
	width: 25%;
	height: 35vh;
	padding: 10px;
	margin-bottom: 30px;
}
#recipe .setup-content .wrapper-recipe .recipe-show .recipe-img{
	width: 100%;
	height: 35vh;
	box-shadow: 0px 0px 20px;
	background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    display: table;
}
#recipe .setup-content .wrapper-recipe .recipe-show .recipe-img .descrip-wrapper{
    text-align: center;
    vertical-align: bottom;
    display: table-cell;
	width: 100%;
	height: 35vh;
	background: rgba(0,0,0,.6); 
    background: -webkit-linear-gradient(rgba(0,0,0,0), rgba(0,0,0,.1), rgba(0,0,0,1)); 
    background: -o-linear-gradient(rgba(0,0,0,0), rgba(0,0,0,.1), rgba(0,0,0,1)); 
    background: -moz-linear-gradient(rgba(0,0,0,0), rgba(0,0,0,.1), rgba(0,0,0,1)); 
    background: linear-gradient(rgba(0,0,0,0), rgba(0,0,0,.1), rgba(0,0,0,1));
}
#recipe .setup-content .wrapper-recipe .recipe-show .recipe-img p{
	width: 80%;
	margin: 0 auto;
	margin-bottom: 5px;
	color: rgb(255,255,255);
	font-family: 'LibreBaskerville';
}
#recipe .setup-content .wrapper-recipe .recipe-show .recipe-img p:nth-child(odd){
	font-weight: bold;
	font-size: 18px;
}
</style>
@endsection

@section('content')

<div id="recipe" class="setup-wrapper" style="background-image: url('{{ asset('amadeo/image/base/sky.png') }}');">
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
				<a href=""><label>Print Recipe</label></a>
			</label>
		</div>
		<div class="display-img" style="background-image: url('{{ asset('amadeo/image/base/recip-1.png') }}');">
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
		
		<h1 class="title" style="padding-top: 10px;">Related Recipes</h1>
		<div class="wrapper-recipe">
			@php
				$arrName = ['', 'Chocolate Orange Cake', 'Jiggly Orange Wedges', 'Orange Glazed Ham Steak', 'Orange Chicken', 'Honey Orange BBQ Chicken', 'Citrus Chicken and Rice', 'Slow Cooker Orange Beef', 'Crispy Orange Beef'];

				$arrCate = ['', 'Dessert', 'Dessert', 'Entree', 'Entree', 'Entree', 'Entree', 'Entree', 'Entree'];
			@endphp
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

@endsection
