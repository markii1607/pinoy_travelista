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

// Redirection when Authenticated
Route::get('admin', ['before' => 'auth.basic', function(){
  $user = Auth::user();
  return "Welcome, ".$user->fname." ".HTML::link('logout', 'Logout');
}]);


// resourceful routes
Route::resource('contacts', 'ContactController');
Route::resource('feedback', 'FeedbackController');
Route::resource('tours', 'TourPackageController');

Route::get('about', function(){
  return View::make('tourism.about');
});

Route::get('contact', function() {
  return View::make('tourism.contact');
});

// Route::get('details/{id}', 'TourPackageController@show');
Route::get('details', 'TourPackageController@details');

