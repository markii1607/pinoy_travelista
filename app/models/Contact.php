<?php

class Contact extends Eloquent {

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'contacts';

  protected $fillable = ['user_id', 'name', 'email', 'subject', 'message'];

  public $rules = ['name' => 'required', 'email' => 'required', 'message' => 'required'];

  public $errors;

  public function isValid($data) {
    $valid = Validator::make($data, $this->rules);

    if ($valid->passes()) return true;

    $this->errors = $valid->messages();
    return false;
  }

  public function user() {
    return $this->beolngsTo('User');
  }
}
