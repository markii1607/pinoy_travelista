<?php

class PriceListTableSeeder extends Seeder {
  public function run() {
    $prices = [
      [
        'id' => 1,
        'tour_package_id' => 1,
        'name' => 'P8,500.00 per 3-7 pax'
      ],
      [
        'id' => 2,
        'tour_package_id' => 1,
        'name' => 'P18,000.00 per 8-15 pax'
      ],
      [
        'id' => 3,
        'tour_package_id' => 2,
        'name' => 'P6,500.00 per 3-7 pax'
      ],
      [
        'id' => 4,
        'tour_package_id' => 2,
        'name' => 'P12,000.00 per 8-15 pax'
      ],
      [
        'id' => 5,
        'tour_package_id' => 3,
        'name' => 'P8,000.00 per 3-7 pax'
      ],
      [
        'id' => 6,
        'tour_package_id' => 3,
        'name' => 'P16,500 per 8-15 pax'
      ],
      [
        'id' => 7,
        'tour_package_id' => 4,
        'name' => 'P8,000.00 per 3-7 pax'
      ],
      [
        'id' => 8,
        'tour_package_id' => 4,
        'name' => 'P16,500 per 8-15 pax'
      ]
    ];

    foreach ($prices as $price) {
      PriceList::create($price);
    }
  }
}