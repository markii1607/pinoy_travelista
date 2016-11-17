<?php

// Contact model
class Contact extends Eloquent {

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'contacts';

  // The property that protects from mass assignments
  protected $fillable = ['user_id', 'name', 'email', 'subject', 'message'];

  // rules for the forms
  public $rules = ['name' => 'required', 'email' => 'required', 'message' => 'required'];

  // handler of error messages of validation
  public $errors;

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

  // relationships with other tables
  public function user() {
    return $this->beolngsTo('User');
  }
}
