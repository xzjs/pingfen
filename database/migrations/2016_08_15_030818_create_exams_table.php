<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExamsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('exams', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('car_id')->nullable();
			$table->integer('mission_id')->nullable();
			$table->integer('time')->nullable();
			$table->float('lat', 10, 0)->nullable();
			$table->float('lon', 10, 0)->nullable();
			$table->integer('is_get')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('exams');
	}

}
