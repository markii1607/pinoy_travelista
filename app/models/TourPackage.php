<?php

// TourPackage model
class TourPackage extends Eloquent {

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'tour_packages';

  // The property that protects from mass assignments
  protected $fillable = ['name', 'folder', 'filename', 'location', 'description', 'travel_time', 'package_inclusion', 'package_exclusion', 'avail', 'no_of_days'];

  // rules for the forms
  public $rules = ['name' => 'required', 'location' => 'required', 'description' => 'required', 'travel_time' => 'required', 'package_inclusion' => 'required', 'package_exclusion' => 'required', 'avail' => 'required', 'no_of_days' => 'required'];

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
  public function tour_reviews() {
    return $this->hasMany('TourReview', 'tour_package_id');
  }

  public function itineraries() {
    return $this->hasMany('Itinerary', 'tour_package_id');
  }

  public function sites() {
    return $this->hasMany('Site', 'tour_package_id');
  }

  public function price_lists() {
    return $this->hasMany('PriceList', 'tour_package_id');
  }
}
