<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItinerariesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('itineraries', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('tour_package_id')->index()->nullable();
			$table->integer('day');
			$table->time('time');
			$table->text('event');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('itineraries');
	}

}
