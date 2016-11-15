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
Route::get('/', function()
{
	return Redirect::to('login');
});

// Resourceful Routing for login
Route::get('login', 'LoginController@index');
Route::post('login', 'LoginController@store');

Route::get('logout', 'LoginController@logout');

// Redirection when Authenticated
Route::get('admin', ['before' => 'auth.basic', function(){
  $user = Auth::user();
  return "Welcome, ".$user->fname." ".HTML::link('logout', 'Logout');
}]);


Route::get('about', function(){
  return View::make('tourism.about')->withTitle('About');
});

Route::get('blog', function(){
  return View::make('tourism.blog')->withTitle('Blog');
});

Route::get('codes', function(){
  return View::make('tourism.codes')->withTitle('Codes');
});

Route::get('contact', function(){
  return View::make('tourism.contact')->withTitle('Contact');
});

Route::get('gallery1', function(){
  return View::make('tourism.gallery1')->withTitle('Gallery1');
});

Route::get('gallery2', function(){
  return View::make('tourism.gallery2')->withTitle('Gallery2');
});

Route::get('gallery3', function(){
  return View::make('tourism.gallery3')->withTitle('Gallery3');
});

Route::get('home', function(){
  return View::make('tourism.index')->withTitle('Home');
});

Route::get('single', function(){
  return View::make('tourism.single')->withTitle('Single');
});

// resourceful routes
Route::resource('contacts', 'ContactController');
Route::resource('feedback', 'FeedbackController');
Route::resource('tours', 'TourPackageController');
