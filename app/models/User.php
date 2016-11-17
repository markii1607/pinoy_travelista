<?php

// User model

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

  // The property that protects from mass assignments
	protected $fillable = ['username', 'password', 'fname', 'mname', 'lname', 'priviledge_id', 'country_id', 'email', 'gender', 'bdate'];

  // rules for the forms
  public $rules = ['username' => 'required', 'password' => 'required'];

  // rules for the register/update forms
  public $regRules = ['username' => 'required', 'password' => 'required', 'fname' => 'required', 'mname' => 'required', 'lname' => 'required', 'country' => 'required', 'email' => 'required', 'gender' => 'required', 'bdate' => 'required'];

  // handler of error messages of validation
  public $errors;

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

  /**
   * Validator of the forms.
   *
   * @param array $data
   * @var string
   */
	public function isValid($data) {
		$valid = Validator::make($data, $this->rules);

		if ($valid->passes()) return true;

		$this->errors = $valid->messages();
		return false;
	}

  /**
   * Validator of the forms.
   *
   * @param array $data
   * @var string
   */
	public function isRegValid($data) {
		$valid = Validator::make($data, $this->regRules);

		if ($valid->passes()) return true;

		$this->errors = $valid->messages();
		return false;
	}

  // relationships with other tables
	public function country() {
		return $this->belongsTo('Country');
	}

	public function feedbacks() {
		return $this->hasMany('Feedback', 'user_id');
	}

	public function contacts() {
		return $this->hasMany('Contact', 'user_id');
	}

}
