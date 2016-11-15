<?php

class DatabaseSeeder extends Seeder 
{

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */

	private $local = [
		'user',
    'country',
    'tour_package',
    'tour_review',
    'feedback',
    'itinerary',
    'price_list',
    'site'
	];

	public function run()
	{
		Eloquent::unguard();

		foreach ($this->local as $i => $table) {
			$seed = studly_case($table).'TableSeeder';
			$table = str_plural($table);
			$this->truncate($table);
			$this->call($seed);
		}
	}

	private function truncate($table)
  {
      if (Schema::hasTable($table)) {
          DB::table($table)->truncate();
      }
  }

}
