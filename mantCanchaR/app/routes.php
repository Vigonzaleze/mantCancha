<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', function()
{
	return View::make('hello');
	// return "hello world";
});

//ROUTING MANTENEDOR TIPO USUARIO
Route::get('/MantTpUsrs', array('as'=>'mantTpUs', 'uses'=>'TipoUserController@index'));
Route::get('/formAddTpUs', array('as'=>'formuAgregarTpUs', 'uses'=>'TipoUserController@crearTpUser'));
Route::post('/agregarTpUs', array('as'=>'agregarTpUs', 'uses'=>'TipoUserController@agregarTpUs'));
Route::get('/formEditTpUs/{id}', array('as'=>'formuEditTpUs', 'uses'=>'TipoUserController@formEdit'));
Route::post('/editarTpUs', array('as'=>'editarTpUs', 'uses'=>'TipoUserController@editTpUs'));
Route::get('/elimTpUs/{id}', array('as'=>'elimTpUs', 'uses'=>'TipoUserController@elimTpUs'));

