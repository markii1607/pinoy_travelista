<?php

class UserTableSeeder extends Seeder {

  public function run() {
    $users = [
      [
        'id' => 1,
        'priv_level' => 1,
        'username' => 'mark',
        'password' => Hash::make('1234'),
        'fname' => 'Mark Jerly',
        'mname' => 'Llagas',
        'lname' => 'Bundalian',
        'email' => 'mark@example.com',
        'gender' => 'M',
        'bdate' => '1996-11-16'
      ],
      [
        'id' => 2,
        'priv_level' => 1,
        'username' => 'janelle',
        'password' => Hash::make('2345'),
        'fname' => 'Janelle',
        'mname' => 'Abilgoz', 
        'lname' => 'Lagatuz',
        'email' => 'jha@example.com',
        'gender' => 'F',
        'bdate' => '1996-07-24'
      ],
      [
        'id' => 3,
        'priv_level' => 1,
        'username' => 'balbz',
        'password' => Hash::make('3456'),
        'fname' => 'John Anthony',
        'mname' => 'Anthony', 
        'lname' => 'Balbin',
        'email' => 'jan@example.com',
        'gender' => 'M',
        'bdate' => '1996-06-20'
      ],
      [
        'id' => 4,
        'priv_level' => 2,
        'country_id' => 1,
        'username' => 'emilio',
        'password' => Hash::make('4567'),
        'fname' => 'Emilio',
        'mname' => 'Valdez', 
        'lname' => 'Domingo',
        'email' => 'emilio@example.com',
        'gender' => 'M',
        'bdate' => '1980-09-12'
      ]
    ];

    foreach ($users as $user) {
      User::create($user);
    }
  }

}