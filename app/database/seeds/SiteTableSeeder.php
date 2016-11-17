<?php

class SiteTableSeeder extends Seeder {
  public function run() {
    $sites = [
      [
        'id' => 1,
        'tour_package_id' => 1,
        'name' => 'Chocolate Hills',
        'folder' => 'bohol',
        'filename' => 'bohol1.jpg'
      ],
      [
        'id' => 2,
        'tour_package_id' => 1,
        'name' => 'Loboc River Cruise',
        'folder' => 'bohol',
        'filename' => 'bohol2.jpg'
      ],
      [
        'id' => 3,
        'tour_package_id' => 1,
        'name' => 'Manmade Forest',
        'folder' => 'bohol',
        'filename' => 'bohol3.jpg'
      ],
      [
        'id' => 4,
        'tour_package_id' => 2,
        'name' => 'Kawa-Kawa Hill',
        'folder' => 'bicol',
        'filename' => 'bicol1.jpg'
      ],
      [
        'id' => 5,
        'tour_package_id' => 2,
        'name' => 'Cagsawa Ruins',
        'folder' => 'bicol',
        'filename' => 'bicol2.jpg'
      ],
      [
        'id' => 6,
        'tour_package_id' => 2,
        'name' => 'Caramoan Beach',
        'folder' => 'bicol',
        'filename' => 'bicol3.jpg'
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
        'name' => 'Turukan Falls',
        'folder' => 'palawan',
        'filename' => 'palawan1.jpg'
      ],
      [
        'id' => 10,
        'tour_package_id' => 3,
        'name' => 'Underground River'
      ],
      [
        'id' => 11,
        'tour_package_id' => 3,
        'name' => 'El Nido',
        'folder' => 'palawan',
        'filename' => 'palawan3.jpg'
      ],
      [
        'id' => 12,
        'tour_package_id' => 3,
        'name' => 'Rock Formation',
        'folder' => 'palawan',
        'filename' => 'palawan2.jpg'
      ],
      [
        'id' => 13,
        'tour_package_id' => 4,
        'name' => 'Boracay Beach Resort',
        'folder' => 'boracay',
        'filename' => 'boracay1.jpg'
      ]
    ];

    foreach ($sites as $site) {
      Site::create($site);
    }
  }
}