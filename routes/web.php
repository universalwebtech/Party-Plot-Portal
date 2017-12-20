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
/*
Route::get('/', function () {
    return view('front.pages.home');
});
Route::get('home', function () {
    return view('front.pages.home');
});
*/
Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');

// --------------------
// Backpack\Demo routes
// --------------------
Route::group(['prefix' => 'admin', 'middleware' => ['web','role'], 'namespace' => 'Admin'], function () {

//Route::group(['prefix' => config('backpack.base.route_prefix', 'admin'),'middleware' => ['admin'],'namespace'  => 'Admin',], function () {
    // CRUD resources and other admin routes
	Route::get('dashboard',  'HomeController@dashboard');
	CRUD::resource('partyplot', 'PartyplotCrudController');
	CRUD::resource('slider', 'SliderCrudController');
	CRUD::resource('advertisement', 'AdvertisementCrudController');
    CRUD::resource('testimonial', 'TestimonialCrudController');
    CRUD::resource('category', 'CategoryCrudController');

});


Route::group(['prefix' => '/', 'middleware' => ['web','role']], function () {
Route::get('/', function () { return view('front.pages.home'); });
Route::get('/', 'Admin\TestimonialCrudController@testimonial');
Route::get('my-account', 'PartyPlotOwnerController@index');
Route::get('my-account/owner_update', 'PartyPlotOwnerController@owner_update');
Route::post('my-account/owner_update', 'PartyPlotOwnerController@owner_update');
Route::get('party-plot', 'PartyPlotController@index');
Route::get('party-plot/add', 'PartyPlotController@add');
Route::post('party-plot/search', 'PartyPlotController@search');
Route::get('party-plot/search', 'PartyPlotController@search');
Route::post('party-plot/list/{category}', 'PartyPlotController@list');
Route::get('party-plot/list/{category}', 'PartyPlotController@list');
Route::post('party-plot/detail/{id}', 'PartyPlotController@detail');
Route::get('party-plot/detail/{id}', 'PartyPlotController@detail');


});
Route::get('/', 'HomeController@index');
