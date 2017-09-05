@extends('frontend.layout.main')

@section('title-page')
	<title>Juice United - Recipe</title>
@endsection

@section('meta-page')
	<meta name="title" content="Juice United - Recipe">
	<meta name="keywords" content="Juice United, Berri Juice, Vittoria Coffee"/>
	<meta name="description" content="For more than 22 years, PT Berri Indosari has been the pioneer in Indonesia's juice industry with vast experience in making and delivering the finest juice beverage since 1992 ...">
@endsection

@section('style')
	<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/css/public.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('amadeo/css/recipe-index.css') }}" />
@endsection

@section('content')
	<div id="recipe" class="setup-wrapper" style="background-image: url('{{ asset('amadeo/image/base/sky.jpg') }}');">
		<div class="setup-content nor-wd">
			<h1 class="title">Recipe</h1>
			<div class="wrapper-recipe">
				@include('frontend.recipe-page.ajax-list-recipe')
				<div id="appendAjax"></div>
				<div class="clearfix"></div>
			</div>
			<div class="centered">
				<label id="loadMoreData" class="btn btn-orange">Load More</label>
				<div class="ajax-load text-center" style="display:none;">
					<p>
						<img src="http://demo.itsolutionstuff.com/plugin/loader.gif">Loading More post
					</p>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('script')
	<script type="text/javascript">
		var page = 1;
		$("label#loadMoreData").click(function(){
		    page++;
		        loadMoreData(page);
		    
		});

		function loadMoreData(page){
		  $.ajax(
		        {
		            url: '?page=' + page,
		            type: "get",
		            beforeSend: function()
		            {
		                $('.ajax-load').show();
		            }
		        })
		        .done(function(data)
		        {
		            if(!data.html){
		                $('.ajax-load').hide();
			            $('label#loadMoreData').hide();
		                return;
		            }
		            $('.ajax-load').hide();
		            $("#appendAjax").append(data.html);
		            window.setTimeout(function() {
					    $('.recipe-show.animation-element').addClass('in-view');
				    }, 50);
		        })
		        .fail(function(jqXHR, ajaxOptions, thrownError)
		        {
		              alert('server not responding...');
		        });

		}
	</script>
@endsection
