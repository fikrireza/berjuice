<h1>{{ $get->recipe_name }}</h1>
<a href="{{ route('frontend.recipe.view', ['slug'=>$get->slug]) }}">visit me on : {{ route('frontend.recipe.view', ['slug'=>$get->slug]) }}</a>
<h1>Ingredients:</h1>
{!! $get->ingredients !!}
<h2>Directions:</h2>
{!! $get->directions !!}

<img style="width: 100%; margin: 0 auto; height: auto;" src="{{ asset('amadeo/image/recipe/'.$get->recipe_image) }}">
