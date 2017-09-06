const { mix } = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// css
	// default
		mix.combine([
			'public/amadeo/plugin/bootstrap-3.3.7/css/bootstrap.css',
			'public/amadeo/css/public.css'
		], 'public/amadeo/css/mix/default.css', 'public/amadeo/css/mix').version();
	// default

	// home
		mix.combine([
			'public/amadeo/plugin/bootstrap-3.3.7/css/bootstrap.css',
			'public/amadeo/css/public.css',
			'public/amadeo/css/scroll-fix.css',
			'public/amadeo/css/home.css',
			'public/amadeo/plugin/owl-carousel/owl.carousel.css',
			'public/amadeo/plugin/owl-carousel/owl.theme.css'
		], 'public/amadeo/css/mix/home.css', 'public/amadeo/css/mix').version();
	// home

	// about
		mix.combine([
			'public/amadeo/plugin/bootstrap-3.3.7/css/bootstrap.css',
			'public/amadeo/css/public.css',
			'public/amadeo/css/scroll-fix.css',
			'public/amadeo/css/about.css'
		], 'public/amadeo/css/mix/about.css', 'public/amadeo/css/mix').version();
	// about

	// contact
		mix.combine([
			'public/amadeo/plugin/bootstrap-3.3.7/css/bootstrap.css',
			'public/amadeo/css/public.css',
			'public/amadeo/css/contact.css'
		], 'public/amadeo/css/mix/contact.css', 'public/amadeo/css/mix').version();
	// contact

	// product index
		mix.combine([
			'public/amadeo/plugin/bootstrap-3.3.7/css/bootstrap.css',
			'public/amadeo/css/public.css',
			'public/amadeo/css/produk-index.css',
			'public/amadeo/plugin/owl-carousel/owl.carousel.css',
			'public/amadeo/plugin/owl-carousel/owl.theme.css'
		], 'public/amadeo/css/mix/produk-index.css', 'public/amadeo/css/mix').version();
	// product index

	// product daily juice
		mix.combine([
			'public/amadeo/plugin/bootstrap-3.3.7/css/bootstrap.css',
			'public/amadeo/css/public.css',
			'public/amadeo/css/produk-daily-juice.css'
		], 'public/amadeo/css/mix/produk-daily-juice.css', 'public/amadeo/css/mix').version();
	// product daily juice

	// product freshly squeezed
		mix.combine([
			'public/amadeo/plugin/bootstrap-3.3.7/css/bootstrap.css',
			'public/amadeo/css/public.css',
			'public/amadeo/css/produk-freshly-squeezed.css'
		], 'public/amadeo/css/mix/produk-freshly-squeezed.css', 'public/amadeo/css/mix').version();
	// product freshly squeezed

	// product premium chilled
		mix.combine([
			'public/amadeo/plugin/bootstrap-3.3.7/css/bootstrap.css',
			'public/amadeo/css/public.css',
			'public/amadeo/css/produk-premium-chilled.css'
		], 'public/amadeo/css/mix/produk-premium-chilled.css', 'public/amadeo/css/mix').version();
	// product premium chilled

	// product victtoria coffee
		mix.combine([
			'public/amadeo/plugin/bootstrap-3.3.7/css/bootstrap.css',
			'public/amadeo/css/public.css',
			'public/amadeo/css/scroll-fix.css',
			'public/amadeo/css/produk-victtoria-coffe.css'
		], 'public/amadeo/css/mix/produk-victtoria-coffe.css', 'public/amadeo/css/mix').version();
	// product victtoria coffee

	// recipe index
		mix.combine([
			'public/amadeo/plugin/bootstrap-3.3.7/css/bootstrap.css',
			'public/amadeo/css/public.css',
			'public/amadeo/css/recipe-index.css'
		], 'public/amadeo/css/mix/recipe-index.css', 'public/amadeo/css/mix').version();
	// recipe index
	
	// recipe view
		mix.combine([
			'public/amadeo/plugin/bootstrap-3.3.7/css/bootstrap.css',
			'public/amadeo/css/public.css',
			'public/amadeo/css/recipe-view.css'
		], 'public/amadeo/css/mix/recipe-view.css', 'public/amadeo/css/mix').version();
	// recipe view
	
// css

// js
	// default
		mix.combine([
			'public/amadeo/plugin/jquery/jquery-3.2.0.min.js',
			'public/amadeo/plugin/bootstrap-3.3.7/js/bootstrap.min.js',
			'public/amadeo/js/publict.js'
		], 'public/amadeo/js/mix/default.js', 'public/amadeo/js/mix').version();
	// default
// js