<?php

class Feedback extends Eloquent {

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'feedbacks';

  protected $fillable = ['user_id', 'name', 'email', 'feedback'];

  public $rules = ['name' => 'required', 'feedback' => 'required'];

  public $errors;

  public function isValid($data) {
    $valid = Validator::make($data, $this->rules);

    if ($valid->passes()) return true;

    $this->errors = $valid->messages();
    return false;
  }

  public function user() {
    return $this->belongsTo('User');
  }
}
