<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGpsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gps', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('vtx_id')->nullable();
			$table->integer('no')->nullable();
			$table->integer('time')->nullable();
			$table->float('lon', 10, 0)->nullable();
			$table->float('lat', 10, 0)->nullable();
			$table->float('angel', 10, 0)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('gps');
	}

}
