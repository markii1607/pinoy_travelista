<?php

class TourReviewTableSeeder extends Seeder {
  public function run() {
    $reviews = [
      [
        'id' => 1,
        'tour_package_id' => 1,
        'name' => 'Jazarr Joy Pintor',
        'email' => 'joy@example.com',
        'review' => 'Woow! Amaziiiing! I am so fulfilled. It is my first time to visit Bohol and it is so so amazing.'
      ],
      [
        'id' => 2,
        'tour_package_id' => 2,
        'name' => 'Christine Kaye Lucido',
        'email' => 'ck@example.com',
        'review' => 'It is so nice to travel in my home region. I enjoyed a lot, and it feels good to be back'
      ],
      [
        'id' => 3,
        'tour_package_id' => 3,
        'name' => 'Christine Kaye Lucido',
        'email' => 'ck@example.com',
        'review' => 'Such an amazing tour. Maybe you should probably try this one too. I would recommend it to my friends to visit Palawan'
      ]
    ];

    foreach ($reviews as $review) {
      TourReview::create($review);
    }
  }
}