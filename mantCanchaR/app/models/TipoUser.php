<?php

class TipoUser extends Eloquent{

    protected $table='TipoUsers';

    protected $fillable=array('tipo', 'created_at', 'updated_at', 'deleted_at');
}