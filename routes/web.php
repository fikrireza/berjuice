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

Route::get('/about-us', 'Frontend\AboutController@index')
	->name('frontend.about');

Route::get('/contact-us', 'Frontend\ContactController@index')
    ->name('frontend.contact');
Route::post('/contact-us/form-store', 'Frontend\ContactController@store')
    ->name('frontend.contact.store');

Route::get('/product', 'Frontend\ProductController@index')
    ->name('frontend.product.index');
Route::get('/product/freshly-squeezed', 'Frontend\ProductController@freshlySqueezed')
    ->name('frontend.product.view.freshly-squeezed');
Route::get('/product/premium-chilled', 'Frontend\ProductController@premiumChilled')
    ->name('frontend.product.view.premium-chilled');
Route::get('/product/victtoria-coffe', 'Frontend\ProductController@coffy')
    ->name('frontend.product.view.victtoria-coffe');
Route::get('/product/espressotoria-machine', 'Frontend\ProductController@coffy')
    ->name('frontend.product.view.espressotoria-machine');

Route::get('/product/daily-juice', 'Frontend\ProductController@dailyJuice')
    ->name('frontend.product.view.daily-juice');

Route::get('/product/sparkling-water', function () {
    return view('frontend.product-page.sparkling-water');
})->name('frontend.product.view.sparkling-water');
Route::get('/product/private-label', function () {
    return view('frontend.product-page.private-label');
})->name('frontend.product.view.private-label');


Route::get('/recipe', 'Frontend\RecipeController@index')
    ->name('frontend.recipe');
Route::get('/recipe/view', 'Frontend\RecipeController@view')
    ->name('frontend.recipe.view');
Route::get('/recipe/view/print', 'Frontend\RecipeController@print')
    ->name('frontend.recipe.print');

Route::get('/recipe/view/print/test', function(){
    return view('frontend.recipe-page.print');
});


// end Frontend

// Auth::routes();
Route::post('login-process', 'Auth\LoginController@login')->name('login');
Route::get('admin/logout-process', 'Auth\LoginController@logoutProcess')->name('logout');
// END Auth::routes()


Route::get('admin/login', 'Auth\LoginController@showLoginForm')->name('login.pages');

// START BACKEND ROUTE
Route::group(['middleware' => ['isAdministrator']], function () {

  Route::get('admin/dashboard', 'Backend\DashboardController@index')->name('admin.dashboard');

	// Recipe Category
	Route::get('admin/recipe-categories', 'Backend\RecipeCategoriesController@index')->name('recipeCategory.index');
	Route::get('admin/recipe-categories/add', 'Backend\RecipeCategoriesController@add')->name('recipeCategory.add');
	Route::post('admin/recipe-categories/add', 'Backend\RecipeCategoriesController@store')->name('recipeCategory.store');
	Route::post('admin/recipe-categories/update', 'Backend\RecipeCategoriesController@update')->name('recipeCategory.update');

	// Recipe Controller
	Route::get('admin/recipe', 'Backend\RecipeController@index')->name('recipe.index');
	Route::get('admin/recipe/add', 'Backend\RecipeController@add')->name('recipe.add');
	Route::post('admin/recipe/add', 'Backend\RecipeController@store')->name('recipe.store');
	Route::get('admin/recipe/edit/{id}', 'Backend\RecipeController@see')->name('recipe.see');
	Route::post('admin/recipe/edit', 'Backend\RecipeController@edit')->name('recipe.edit');
	Route::get('admin/recipe/publish', 'Backend\RecipeController@publish')->name('recipe.publish');
});
// END BACKEND ROUTE
