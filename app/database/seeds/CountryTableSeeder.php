<?php

class CountryTableSeeder extends Seeder {

  public function run() {
    $countries = [
      [
        'id' => 1,
        'name' => 'Spain'
      ],[
        'id' => 2,
        'name' => 'Japan'
      ],[
        'id' => 3,
        'name' => 'United States'
      ],[
        'id' => 4,
        'name' => 'Australia'
      ],[
        'id' => 5,
        'name' => 'New Zealand'
      ],[
        'id' => 6,
        'name' => 'France'
      ],[
        'id' => 7,
        'name' => 'China'
      ],[
        'id' => 8,
        'name' => 'South Korea'
      ],[
        'id' => 9,
        'name' => 'Mexico'
      ],[
        'id' => 10,
        'name' => 'Brazil'
      ]
    ];

    foreach ($countries as $country) {
      Country::create($country);
    }
  }

}