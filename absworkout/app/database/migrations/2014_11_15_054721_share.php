<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Share extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('share',function($table)
		{
			$table->increments('id');
			$table->string('username');
			$table->integer('calories');
			$table->integer('times');
			$table->timestamps();
		});////
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('share');//
	}

}
