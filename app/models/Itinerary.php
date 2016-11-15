<?php

class Itinerary extends Eloquent {

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'itineraries';

  protected $fillable = ['tour_package_id', 'day', 'time', 'event'];

  public $rules = ['tour_package' => 'required', 'day' => 'required', 'time' => 'required', 'event' => 'required'];

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
