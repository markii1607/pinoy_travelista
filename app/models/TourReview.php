<?php

class TourReview extends Eloquent {

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'tour_reviews';

  protected $fillable = ['tour_package_id', 'name', 'email', 'review'];

  public $rules = ['tour_package' => 'required', 'name' => 'required', 'email' => 'required', 'review' => 'required'];

  public $errors;

  public function isValid($data) {
    $valid = Validator::make($data, $this->rules);

    if ($valid->passes()) return true;

    $this->errors = $valid->messages();
    return false;
  }

  public function tour_package() {
    return $this->belongsTo('TourPackage');
  }
}
