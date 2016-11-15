<?php

class LoginController extends \BaseController {

	protected $user;

	// Constructor for the Model User
	public function __construct(User $user) {
		$this->user = $user;
	}

	// GET method for login, display the view
	public function index() {
		return View::make('login');
	}

	// POST method for login, process the post data from index
	public function store() {
		$credentials = array(
			'username' => Input::get('username'),
			'password' => Input::get('password')
		);

		// Validation of fields from user model
		if ( ! $this->user->isValid(Input::all()) ) {
			return Redirect::back()->withInput()->withErrors($this->user->errors);
		}

		// session handling and authentication
		if (Auth::attempt($credentials)) {
			return Redirect::to('admin');
		}

		return 'Invalid Username or Password';
		Redirect::to('/')->withInput();
	}

	public function logout() {
		Auth::logout();
		return Redirect::to('/');
	}

}
