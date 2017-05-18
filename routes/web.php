<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::resource('/', 'IndexsController');
Route::resource('image', 'ImageController');
Route::resource('blog', 'BlogsController');
Route::get('admin', function () {
    return view('dashboard.index');
});

Route::get('dashboard1', function() {
	return view('dashboard.index');
});
Route::get('/home', 'HomeController@index');
//Route::get('dashboard', 'DashboardsController');
Auth::routes();

