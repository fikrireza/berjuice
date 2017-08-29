@foreach($call as $list)
<div class="recipe-show animation-element">
	<div class="recipe-img" style="background-image: url('{{ asset('amadeo/image/recipe/'.$list->recipe_image_thumb) }}');">
		<div class="descrip-wrapper">
			<a href="{{ route('frontend.recipe.view', ['slug' => $list->slug]) }}">
				<p>{{ $list->recipe_name }}</p>
			</a>
			<p>{{ $list->recipe_category->category_name }}</p>
		</div>
	</div>
</div>
@endforeach