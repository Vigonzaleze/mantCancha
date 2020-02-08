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
		Schema::table('Reservas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->foreign('cancha_id')->references('id')->on('Canchas');
			$table->foreign('user_id')->references('id')->on('Users');
			
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
		Schema::table('Reservas', function(Blueprint $table)
		{
			//
		});
	}

}
