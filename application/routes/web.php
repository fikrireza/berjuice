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

});
// END BACKEND ROUTE
