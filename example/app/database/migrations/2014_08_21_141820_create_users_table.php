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

		Schema::create('users', function($table) {

		    $table->increments('id');

		    $table->string('username', 32);
		    $table->string('password', 60);

		    $table->string('first_name', 32);
		    $table->string('last_name', 32);

		    $table->string('email', 255);

		    $table->timestamps();
		    $table->rememberToken();

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
