<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('member',function($table)
		{
				$table->increments('id');
				$table->string('username');
				$table->string('password');
				$table->string('email');
				$table->integer('weight');
				$table->integer('height');
				$table->integer('age');
				$table->string('gender');
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
		Schema::drop('member');
	}

}
