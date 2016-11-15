<?php

class FeedbackTableSeeder extends Seeder {
  public function run() {
    $feedbacks = [
      [
        'id' => 1,
        'name' => 'Katrina Joyce Britanico',
        'email' => 'kat@example.com',
        'feedback' => 'Travelling with Pinoy Travelista is AWESOME!'
      ],
      [
        'id' => 2,
        'name' => 'Carlo Magno Miraflor',
        'email' => 'carl@example.com',
        'feedback' => 'I enjoyed travelling to the beautiful places in the Philippines. Thanks Pinoy Travelista'
      ],
      [
        'id' => 3,
        'name' => 'Harvey Javier',
        'email' => 'harvz@example.com',
        'feedback' => 'I want to go back... coz I love the Philippines!'
      ],
    ];

    foreach ($feedbacks as $feedback) {
      Feedback::create($feedback);
    }
  }
}