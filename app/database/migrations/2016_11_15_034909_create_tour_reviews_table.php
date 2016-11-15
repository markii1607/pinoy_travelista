<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourReviewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tour_reviews', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('tour_package_id')->index()->nullable();
			$table->string('name');
			$table->string('email');
			$table->text('review');
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
		Schema::drop('tour_reviews');
	}

}
