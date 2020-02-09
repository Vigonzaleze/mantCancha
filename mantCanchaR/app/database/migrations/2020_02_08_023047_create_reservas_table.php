<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Reservas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('cancha_id')->unsigned();
			$table->foreign('cancha_id')->references('id')->on('Canchas')->onDelete('cascade');
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('Users')->onDelete('cascade');
			$table->dateTime('hora_reserva_inicio');
			$table->dateTime('hora_reserva_termino');
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
		Schema::dropIfExists('Reservas');
	}

}
