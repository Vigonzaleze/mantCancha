<?php

class Reserva extends Eloquent{

    protected $table='Reservas';

    protected $fillable=array('cancha_id', 'user_id', 'created_at', 'deleted_at', 'updated_at',
                                'hora_reserva_inicio', 'hora_reserva_termino');

    public function cancha()
    {
        return $this->hasOne('Cancha');
    }

    public function user()
    {
        return $this->hasOne('User');
    }
}