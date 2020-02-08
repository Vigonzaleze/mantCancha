<?php

Class Direccion extends Eloquent{

    protected $table = 'Direccions';

    protected $fillable = array('calle', 'numeracion', 'created_at', 'updated_at', 'deleted_at');
    
}