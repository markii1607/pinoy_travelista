<?php

// Site model
class Site extends Eloquent {

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'sites';

  // The property that protects from mass assignments
  protected $fillable = ['tour_package_id', 'name', 'folder', 'filename'];

  // rules for the forms
  public $rules = ['tour_package_id' => 'required', 'name' => 'required'];

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
  public function tour_package() {
    return $this->belongsTo('TourPackage');
  }
}
