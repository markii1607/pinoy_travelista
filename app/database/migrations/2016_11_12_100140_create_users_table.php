<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('priv_level')->comment('1 - Admin, 2 - User');
			$table->unsignedInteger('country_id')->index()->nullable();
			$table->string('username');
			$table->string('password');
			$table->string('fname');
			$table->string('mname');
			$table->string('lname');
			$table->string('email');
			$table->string('gender');
			$table->date('bdate');
			$table->rememberToken()->nullable();
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
		Schema::drop('users');
	}

}
