<?php

class Country extends Eloquent {

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'countries';

  protected $fillable = ['name'];

  public $rules = ['name' => 'required'];

  public $errors;

  public function isValid($data) {
    $valid = Validator::make($data, $this->rules);

    if ($valid->passes()) return true;

    $this->errors = $valid->messages();
    return false;
  }

  public function users() {
    return $this->hasMany('User', 'country_id');
  }
}
