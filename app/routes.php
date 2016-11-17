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

// Resourceful Routing for login
Route::get('login', 'LoginController@index');
Route::post('login', 'LoginController@store');

Route::get('logout', 'LoginController@logout');

Route::get('top', function() {
	return View::make('top');
});

Route::get('testimonials', function() {
	return View::make('testimonials');
});
Route::get('details', function() {
	return View::make('tourism.details');
});

// Redirection when Authenticated
Route::get('admin', ['before' => 'auth.basic', function(){
  $user = Auth::user();
  return "Welcome, ".$user->fname." ".HTML::link('logout', 'Logout');
}]);


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

Route::get('admin/pages/accounts', ['before' => 'auth.basic', 'uses' => 'UserController@admin_index']);

// logout routes
Route::get('logout', function() {
  Auth::logout();
  return Redirect::to('/'); 
});

