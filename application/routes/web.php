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

// end Frontend

// Auth::routes();
Route::post('login-process', 'Auth\LoginController@loginProcess')->name('login');
Route::get('admin/logout-process', 'Auth\LoginController@logoutProcess')->name('logout');
// END Auth::routes()


Route::get('admin/login', function(){
  return view('backend.auth.login');
})->name('login.pages');

// START BACKEND ROUTE
Route::group(['middleware' => ['isAdministrator']], function () {

  Route::get('admin/dashboard', 'Backend\DashboardController@index')->name('admin.dashboard');

	// Recipe Controller
	Route::get('admin/recipe', 'Backend\RecipeController@index')->name('recipe.index');
	Route::get('admin/recipe/add', 'Backend\RecipeController@add')->name('recipe.add');
	Route::post('admin/recipe/add', 'Backend\RecipeController@store')->name('recipe.store');
	Route::get('admin/recipe/edit/{id}', 'Backend\RecipeController@see')->name('recipe.see');
	Route::post('admin/recipe/edit', 'Backend\RecipeController@edit')->name('recipe.edit');
	Route::get('admin/recipe/publish', 'Backend\RecipeController@publish')->name('recipe.publish');
});
// END BACKEND ROUTE
