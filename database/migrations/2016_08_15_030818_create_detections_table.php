<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDetectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detections', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('type')->nullable();
			$table->integer('time')->nullable();
			$table->float('lon', 10, 0)->nullable();
			$table->float('lat', 10, 0)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('detections');
	}

}
