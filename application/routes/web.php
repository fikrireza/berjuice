<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Frontend
Route::get('/', 'Frontend\HomeController@index')
	->name('frontend.home');

Route::get('/recipe', function () {
    return view('frontend.recipe');
})->name('recipe');

Route::get('/product', function () {
    return view('frontend.product');
})->name('product');

Route::get('/product-in', function () {
    return view('frontend.product-in');
})->name('product-in');
