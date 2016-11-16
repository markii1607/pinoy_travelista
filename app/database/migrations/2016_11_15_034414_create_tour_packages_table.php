<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourPackagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tour_packages', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('filename');
			$table->string('location');
			$table->text('description');
			$table->string('travel_time');
			$table->text('package_inclusion');
			$table->text('package_exclusion');
			$table->text('avail');
			$table->integer('no_of_days');
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
		Schema::drop('tour_packages');
	}

}
