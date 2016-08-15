<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVtxsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vtxs', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('equipment_id')->nullable();
			$table->integer('number')->nullable();
			$table->float('time', 10, 0)->nullable();
			$table->float('lon', 10, 0)->nullable();
			$table->float('lat', 10, 0)->nullable();
			$table->float('angle', 10, 0)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vtxs');
	}

}
