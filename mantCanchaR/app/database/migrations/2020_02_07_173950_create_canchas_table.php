<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCanchasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Canchas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->integer('estado'); // 0 = disponible, 1 = reservada
			$table->integer('precio');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('Canchas');
	}

}
