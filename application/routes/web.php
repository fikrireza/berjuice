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

Route::get('/contact-us', function () {
    return view('frontend.contact-page.index');
})->name('frontend.contact');

Route::get('/product', function () {
    return view('frontend.product-page.index');
})->name('frontend.product.index');

Route::get('/premium-chilled', function () {
    return view('frontend.product-page.premium-chilled');
})->name('frontend.product.view.premium-chilled');
Route::get('/victtoria-coffe', function () {
    return view('frontend.product-page.victtoria-coffe');
})->name('frontend.product.view.victtoria-coffe');
Route::get('/daily-juice', function () {
    return view('frontend.product-page.daily-juice');
})->name('frontend.product.view.daily-juice');
Route::get('/sparkling-water', function () {
    return view('frontend.product-page.sparkling-water');
})->name('frontend.product.view.sparkling-water');
Route::get('/private-label', function () {
    return view('frontend.product-page.private-label');
})->name('frontend.product.view.private-label');


Route::get('/recipe', function () {
    return view('frontend.recipe-page.index');
})->name('frontend.recipe');
Route::get('/recipe/view', function () {
    return view('frontend.recipe-page.view');
})->name('frontend.recipe.view');


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

});
// END BACKEND ROUTE
