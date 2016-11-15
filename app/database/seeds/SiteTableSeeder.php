<?php

class SiteTableSeeder extends Seeder {
  public function run() {
    $sites = [
      [
        'id' => 1,
        'tour_package_id' => 1,
        'name' => 'Chocolate Hills'
      ],
      [
        'id' => 2,
        'tour_package_id' => 1,
        'name' => 'Loboc River Cruise'
      ],
      [
        'id' => 3,
        'tour_package_id' => 1,
        'name' => 'Manmade Forest'
      ],
      [
        'id' => 4,
        'tour_package_id' => 2,
        'name' => 'Kawa-Kawa Hill'
      ],
      [
        'id' => 5,
        'tour_package_id' => 2,
        'name' => 'Cagsawa Ruins'
      ],
      [
        'id' => 6,
        'tour_package_id' => 2,
        'name' => 'Caramoan Beach'
      ],
      [
        'id' => 7,
        'tour_package_id' => 2,
        'name' => 'Mayon Skyline'
      ],
      [
        'id' => 8,
        'tour_package_id' => 2,
        'name' => 'Misibis Bay and Resort'
      ],
      [
        'id' => 9,
        'tour_package_id' => 3,
        'name' => 'Turukan Falls'
      ],
      [
        'id' => 10,
        'tour_package_id' => 3,
        'name' => 'Underground River'
      ],
      [
        'id' => 11,
        'tour_package_id' => 3,
        'name' => 'El Nido'
      ],
      [
        'id' => 12,
        'tour_package_id' => 3,
        'name' => 'Rock Formation'
      ]
    ];

    foreach ($sites as $site) {
      Site::create($site);
    }
  }
}