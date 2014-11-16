<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Program1 extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('program1',function($table)
		{
			$table->increments('week');
			$table->string('day1');
			$table->string('day2');
			$table->string('day3');
			$table->string('day4');
			$table->string('day5');
			$table->string('day6');
			$table->string('day7');
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
		Schema::drop('program1');
	}

}