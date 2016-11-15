<?php

class PriceList extends Eloquent {

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'price_lists';

  protected $fillable = ['tour_package_id', 'name'];

  public $rules = ['tour_package' => 'required', 'name' => 'required'];

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
