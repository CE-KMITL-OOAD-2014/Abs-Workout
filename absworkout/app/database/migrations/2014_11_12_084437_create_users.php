<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users',function($table)
		{
			$table->increments('id');
			$table->string('username');
			$table->string('password');
			$table->string('email');
			$table->integer('weight');
			$table->integer('height');
			$table->integer('age');
			$table->timestamps();
			$table->string('remember_token',100);
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
