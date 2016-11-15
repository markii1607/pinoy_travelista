<?php

class ItineraryTableSeeder extends Seeder {
  public function run() {
    $itineraries = [
      [
        'id' => 1,
        'tour_package_id' => 1,
        'day' => 1,
        'time' => '08:30:00',
        'event' => 'Arrival from Manila'
      ],
      [
        'id' => 2,
        'tour_package_id' => 1,
        'day' => 1,
        'time' => '08:30:00',
        'event' => 'Chocolate Hills'
      ],
      [
        'id' => 3,
        'tour_package_id' => 1,
        'day' => 1,
        'time' => '12:00:00',
        'event' => 'Lunch Break'
      ],
      [
        'id' => 4,
        'tour_package_id' => 1,
        'day' => 1,
        'time' => '13:00:00',
        'event' => 'Loboc River Cruise'
      ],
      [
        'id' => 5,
        'tour_package_id' => 1,
        'day' => 1,
        'time' => '15:00:00',
        'event' => 'Manmade Forest'
      ],
      [
        'id' => 6,
        'tour_package_id' => 1,
        'day' => 1,
        'time' => '19:00:00',
        'event' => 'Departure to Manila'
      ],
      [
        'id' => 7,
        'tour_package_id' => 2,
        'day' => 1,
        'time' => '08:00:00',
        'event' => 'Arrival from Manila'
      ],
      [
        'id' => 8,
        'tour_package_id' => 2,
        'day' => 1,
        'time' => '08:15:00',
        'event' => 'Kawa Kawa Hill'
      ],
      [
        'id' => 9,
        'tour_package_id' => 2,
        'day' => 1,
        'time' => '12:00:00',
        'event' => 'Lunch Break'
      ],
      [
        'id' => 10,
        'tour_package_id' => 2,
        'day' => 1,
        'time' => '13:00:00',
        'event' => 'Caramoan Beach'
      ],
      [
        'id' => 11,
        'tour_package_id' => 2,
        'day' => 1,
        'time' => '18:30:00',
        'event' => 'Dinner'
      ],
      [
        'id' => 12,
        'tour_package_id' => 2,
        'day' => 1,
        'time' => '19:30:00',
        'event' => 'Departure from Caramoan to Legazpi'
      ],
      [
        'id' => 13,
        'tour_package_id' => 2,
        'day' => 1,
        'time' => '21:30:00',
        'event' => 'ETA, Hotel'
      ],
      [
        'id' => 14,
        'tour_package_id' => 2,
        'day' => 2,
        'time' => '06:00:00',
        'event' => 'Breakfast'
      ],
      [
        'id' => 15,
        'tour_package_id' => 2,
        'day' => 2,
        'time' => '08:15:00',
        'event' => 'Misibis Bay and Resort'
      ],
      [
        'id' => 16,
        'tour_package_id' => 2,
        'day' => 2,
        'time' => '12:00:00',
        'event' => 'Lunch Break'
      ],
      [
        'id' => 17,
        'tour_package_id' => 2,
        'day' => 2,
        'time' => '13:00:00',
        'event' => 'Kawa Kawa Hill'
      ],
      [
        'id' => 18,
        'tour_package_id' => 2,
        'day' => 2,
        'time' => '14:30:00',
        'event' => 'Mayon Skyline'
      ],
      [
        'id' => 19,
        'tour_package_id' => 2,
        'day' => 2,
        'time' => '17:00:00',
        'event' => 'Departure to Manila'
      ],
      [
        'id' => 20,
        'tour_package_id' => 3,
        'day' => 1,
        'time' => '08:15:00',
        'event' => 'Arrival from Manila'
      ],
      [
        'id' => 21,
        'tour_package_id' => 3,
        'day' => 1,
        'time' => '08:30:00',
        'event' => 'Turukan Falls'
      ],
      [
        'id' => 22,
        'tour_package_id' => 3,
        'day' => 1,
        'time' => '10:00:00',
        'event' => 'El Nido'
      ],
      [
        'id' => 23,
        'tour_package_id' => 3,
        'day' => 1,
        'time' => '12:00:00',
        'event' => 'Lunch Break'
      ],
      [
        'id' => 24,
        'tour_package_id' => 3,
        'day' => 1,
        'time' => '13:00:00',
        'event' => 'Underground River'
      ],
      [
        'id' => 25,
        'tour_package_id' => 3,
        'day' => 1,
        'time' => '16:00:00',
        'event' => 'Rock Formation'
      ],
      [
        'id' => 26,
        'tour_package_id' => 3,
        'day' => 1,
        'time' => '19:00:00',
        'event' => 'Departure to Manila'
      ]
    ];

    foreach ($itineraries as $itinerary) {
      Itinerary::create($itinerary);
    }
  }
}