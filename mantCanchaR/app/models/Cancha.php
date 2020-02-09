<?php

class Cancha extends Eloquent{
    
    protected $table = 'Canchas';

    protected $fillable = array('nombre', 'estado', 'precio', 'created_at', 'updated_at', 'deleted_at');

    public function direccion()
    {
        return $this->belongsTo('Direccion','direccion_id');
    }
}