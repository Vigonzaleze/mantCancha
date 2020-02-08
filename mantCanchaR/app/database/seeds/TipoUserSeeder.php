<?php

use Illuminate\Database\Seeder;

class TipoUserSeeder extends Seeder{

    public function run(){
        TipoUser::create(array(
            'tipo' => 'administrador'
        ));
        TipoUser::create(array(
            'tipo' => 'cliente'
        ));
    }
}