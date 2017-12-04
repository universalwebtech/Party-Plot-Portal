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

Route::get('/', function () {
    return view('pages.home');
});
Route::get('	home', function () {
    return view('pages.home');
});



// --------------------
// Backpack\Demo routes
// --------------------
Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['admin'],
    'namespace'  => 'Admin',
], function () {
    // CRUD resources and other admin routes
    CRUD::resource('monster', 'MonsterCrudController');
	CRUD::resource('party_plot', 'PartyPlotCrudController');
	CRUD::resource('slider', 'SliderCrudController');
	CRUD::resource('advertisement', 'AdvertisementCrudController');

});

Route::get('api/article', 'Api\ArticleController@index');
Route::get('api/article/{id}', 'Api\ArticleController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/home', 'HomeController@index')->name('home');
