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
    return view('front.pages.home');
});
Route::get('home', function () {
    return view('front.pages.home');
});
Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');

// --------------------
// Backpack\Demo routes
// --------------------
Route::group(['prefix' => 'admin', 'middleware' => ['web','role'], 'namespace' => 'Admin'], function () {

//Route::group(['prefix' => config('backpack.base.route_prefix', 'admin'),'middleware' => ['admin'],'namespace'  => 'Admin',], function () {
    // CRUD resources and other admin routes
	Route::get('dashboard',  'HomeController@dashboard');

		
    CRUD::resource('monster', 'MonsterCrudController');
	CRUD::resource('partyplot', 'PartyplotCrudController');
	CRUD::resource('slider', 'SliderCrudController');
	CRUD::resource('advertisement', 'AdvertisementCrudController');
    CRUD::resource('testimonial', 'TestimonialCrudController');
    CRUD::resource('category', 'CategoryCrudController');

});

Route::get('api/article', 'Api\ArticleController@index');
Route::get('api/article/{id}', 'Api\ArticleController@show');



Route::group(['prefix' => '/', 'middleware' => ['web','role']], function () {
Route::get('/', function () { return view('front.pages.home'); });
Route::get('/', 'Admin\SliderCrudController@slider');
Route::get('/', 'Admin\TestimonialCrudController@testimonial');
Route::get('/', 'Admin\CategoryCrudController@category');


Route::get('my-account', 'PartyPlotOwnerController@index');
Route::get('my-account/owner_update', 'PartyPlotOwnerController@owner_update');
Route::post('my-account/owner_update', 'PartyPlotOwnerController@owner_update');
Route::get('party_plot', 'PartyPlotController@index');
Route::post('party_plot/update', 'PartyPlotController@party_plot_update');


});

<<<<<<< HEAD
Route::get('/', 'Admin\CategoryCrudController@category');
Route::get('/', 'Admin\PartyplotCrudController@partyplot');
Route::get('/home', 'HomeController@index')->name('home');
=======

//Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> 03d243c2217c0c57552d851f7962bc673cb62b44
//Route::get('/home', 'HomeController@index')->name('home');
