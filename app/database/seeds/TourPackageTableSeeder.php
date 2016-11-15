<?php

class TourPackageTableSeeder extends Seeder {
  public function run() {
    $packages = [
      [
        'id' => 1,
        'name' => 'Bohol Adventure and Tour Package',
        'location' => 'Bohol, Philippines',
        'description' => '',
        'travel_time' => 'From Manila (by Plane): 07:00 ETD, 08:15 ETA -- To Manila (by Plane): 19:00 ETD, 20:15 ETA',
        'package_inclusion' => 'Fuel, Toll & Parking - Boat Fee - Life Vest Fee - Van Transportation - Driver Fee, Meal and Accomodation',
        'package_exclusion' => 'Meals - Entrance Fees',
        'avail' => 'Contact us with your preffered travel date and number of guests. Vouchers of your trip will be sent after proof of payment has been submitted',
        'no_of_days' => '1'
      ],
      [
        'id' => 2,
        'name' => 'Bicol Region Tour Package',
        'location' => 'Bicol, Philippines',
        'description' => '',
        'travel_time' => 'From Manila (by Plane): 07:00 ETD, 08:00 ETA Day 1 -- To Manila (by Plane): 17:00 ETD, 18:00 ETA Day 2',
        'package_inclusion' => 'FREE Breakfast for the 2nd and 3rd day - Driver Fee and Meal - Van Transportation - Environmental Fee, Permit and Taxes - 1 night stay on a Hotel accomodation',
        'package_exclusion' => 'ATV Adventure - Meals - Guide to Caves',
        'avail' => 'Contact us with your preffered travel date and number of guests. Vouchers of your trip will be sent after proof of payment has been submitted',
        'no_of_days' => '2'
      ],
      [
        'id' => 3,
        'name' => 'Palawan Tour Package',
        'location' => 'Palawan, Philippines',
        'description' => '',
        'travel_time' => 'From Manila (by Plane): 07:00 ETD, 08:15 ETA -- To Manila (by Plane): 19:00 ETD, 20:00 ETA',
        'package_inclusion' => 'FREE use of life vest, snorkle/mask - Tour guide - Aircon room accomodation - All entrance fee - Permit & taxes - Shuttle Service',
        'package_exclusion' => 'Meals - Boat Fee',
        'avail' => 'Contact us with your preffered travel date and number of guests. Vouchers of your trip will be sent after proof of payment has been submitted',
        'no_of_days' => '1'
      ]
    ];

    foreach ($packages as $package) {
      TourPackage::create($package);
    }
  }
}