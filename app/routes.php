<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// route for home page
Route::get('/', 'TourPackageController@getPackages');

// resourceful routes
Route::resource('contacts', 'ContactController');
Route::resource('testimonials', 'FeedbackController');
Route::resource('tours', 'TourPackageController');
Route::resource('itinerary', 'ItineraryController');
Route::resource('prices', 'PriceListController');
Route::resource('sites', 'SiteController');
Route::resource('reviews', 'TourReviewController');
Route::resource('users', 'UserController');

// individual page routes (Closures)
Route::get('about', function(){
  return View::make('tourism.about');
});

Route::get('asd', function(){
  return View::make('admin.addItineraries');
});

// individual page routes (Controllers)
Route::get('top', 'TourPackageController@getTours');

Route::get('details', 'TourPackageController@details');

// admin Routes
Route::get('admin/pages/', function() {
  return Redirect::to('admin/pages/view_feeds');
});

Route::get('admin/pages/tour_packages', ['before' => 'auth.basic', 'uses' => 'TourPackageController@admin_index']);

Route::get('admin/pages/tour_reviews', ['before' => 'auth.basic', 'uses' => 'TourReviewController@admin_index']);

Route::get('admin/pages/customers', ['before' => 'auth.basic', 'uses' => 'ContactController@admin_index']);

Route::get('admin/pages/view_feeds', ['before' => 'auth.basic', 'uses' => 'FeedbackController@admin_index']);

Route::get('admin/pages/view_itineraries', ['before' => 'auth.basic', 'uses' => 'ItineraryController@admin_index']);

Route::get('admin/pages/view_sites', ['before' => 'auth.basic', 'uses' => 'SiteController@admin_index']);

Route::get('admin/pages/price_list', ['before' => 'auth.basic', 'uses' => 'PriceListController@admin_index']);

// logout routes
Route::get('admin/pages/logout', function() {
  Auth::logout();
  return Redirect::to('/'); 
});

Route::get('tours/{id}/logout', function() {
  Auth::logout();
  return Redirect::to('/'); 
});

Route::get('tours/logout', function() {
  Auth::logout();
  return Redirect::to('/'); 
});

Route::get('itinerary/{id}/logout', function() {
  Auth::logout();
  return Redirect::to('/'); 
});

Route::get('itinerary/logout', function() {
  Auth::logout();
  return Redirect::to('/'); 
});

Route::get('prices/{id}/logout', function() {
  Auth::logout();
  return Redirect::to('/'); 
});

Route::get('prices/logout', function() {
  Auth::logout();
  return Redirect::to('/'); 
});

Route::get('sites/{id}/logout', function() {
  Auth::logout();
  return Redirect::to('/'); 
});

Route::get('sites/logout', function() {
  Auth::logout();
  return Redirect::to('/'); 
});

