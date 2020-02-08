<?php

class Reserva extends Eloquent{

    protected $table='Reservas';

    protected $fillable=array('cancha_id', 'user_id',  'direccion_id', 'created_at', 'deleted_at', 'updated_at',
                                'hora_reserva_inicio', 'hora_reserva_termino');
}