<?php

class TourPackageTableSeeder extends Seeder {
  public function run() {
    $packages = [
      [
        'id' => 1,
        'name' => 'Bohol Adventure and Tour Package',
        'folder' => 'bohol',
        'filename' => 'bohol1.jpg',
        'location' => 'Bohol, Philippines',
        'description' => 'Home of our famous chocolate hills. Bond with the tarsiers and wander through the chocolatey goodness theses hills have (they may look delicious but THEY\'RE NOT)',
        'travel_time' => 'From Manila (by Plane): 07:00 ETD, 08:15 ETA -- To Manila (by Plane): 19:00 ETD, 20:15 ETA',
        'package_inclusion' => 'Fuel, Toll & Parking - Boat Fee - Life Vest Fee - Van Transportation - Driver Fee, Meal and Accomodation',
        'package_exclusion' => 'Meals - Entrance Fees',
        'avail' => 'Contact us with your preferred travel date and number of guests. Vouchers of your trip will be sent after proof of payment has been submitted',
        'no_of_days' => '1'
      ],
      [
        'id' => 2,
        'name' => 'Bicol Region Tour Package',
        'folder' => 'bicol',
        'filename' => 'bicol1.jpg',
        'location' => 'Bicol, Philippines',
        'description' => 'Looking for exciting adventures? Why not try the countless trails of Cagsawa Ruins with a perfect view of the Mt. Mayon? Bicol is not only famous for its spicy dishes but also for its beautiful beaches and the perfect cone shape of Mt. Mayon',
        'travel_time' => 'From Manila (by Plane): 07:00 ETD, 08:00 ETA Day 1 -- To Manila (by Plane): 17:00 ETD, 18:00 ETA Day 2',
        'package_inclusion' => 'FREE Breakfast for the 2nd and 3rd day - Driver Fee and Meal - Van Transportation - Environmental Fee, Permit and Taxes - 1 night stay on a Hotel accomodation',
        'package_exclusion' => 'ATV Adventure - Meals - Guide to Caves',
        'avail' => 'Contact us with your preferred travel date and number of guests. Vouchers of your trip will be sent after proof of payment has been submitted',
        'no_of_days' => '2'
      ],
      [
        'id' => 3,
        'name' => 'Palawan Tour Package',
        'folder' => 'palawan',
        'filename' => 'palawan1.jpg',
        'location' => 'Palawan, Philippines',
        'description' => 'Looking for a tropical destination where you can do snorkeling and diving? This package is perfect for you! Enjoy snorkeling with tropical fishes and corals under the clear waters of Palawan.',
        'travel_time' => 'From Manila (by Plane): 07:00 ETD, 08:15 ETA -- To Manila (by Plane): 19:00 ETD, 20:00 ETA',
        'package_inclusion' => 'FREE use of life vest, snorkle/mask - Tour guide - Aircon room accomodation - All entrance fee - Permit & taxes - Shuttle Service',
        'package_exclusion' => 'Meals - Boat Fee',
        'avail' => 'Contact us with your preferred travel date and number of guests. Vouchers of your trip will be sent after proof of payment has been submitted',
        'no_of_days' => '1'
      ],
      [
        'id' => 4,
        'name' => 'Boracay Tour Package',
        'folder' => 'boracay',
        'filename' => 'boracay1.jpg',
        'location' => 'Aklan, Philippines',
        'description' => 'Let your toes touch the cool warm white sand of Boracay Beach, Enjoy the soothing sound of waves crashing on the white shore as you admire the paradise that is Boracay Beach.',
        'travel_time' => 'From Manila (by Plane): 07:00 ETD, 08:15 ETA -- To Manila (by Plane): 19:00 ETD, 20:00 ETA',
        'package_inclusion' => 'FREE use of life vest, snorkle/mask - Tour guide - Aircon room accomodation - All entrance fee - Permit & taxes - Shuttle Service',
        'package_exclusion' => 'Meals - Banana Boat Fee',
        'avail' => 'Contact us with your preferred travel date and number of guests. Vouchers of your trip will be sent after proof of payment has been submitted',
        'no_of_days' => '1'
      ]
    ];

    foreach ($packages as $package) {
      TourPackage::create($package);
    }
  }
}