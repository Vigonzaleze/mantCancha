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

//ROUTING MANTENEDOR DIRECCION
Route::get('/MantDirs', array('as'=>'mantDirs', 'uses'=>'DireccionController@index'));
Route::get('/formAddDir', array('as'=>'formuAgregarDirs', 'uses'=>'DireccionController@formAgregDir'));
Route::post('/agregarDir', array('as'=>'agregarDir', 'uses'=>'DireccionController@agregarDir'));
Route::get('/formEditDir/{id}', array('as'=>'formuEditDirs', 'uses'=>'DireccionController@formEditDir'));
Route::post('/editarDir', array('as'=>'editarDir', 'uses'=>'DireccionController@editDir'));
Route::get('/elimDir/{id}', array('as'=>'elimDir', 'uses'=>'DireccionController@elimDir'));


//ROUTING MANTENEDOR CANCHA
Route::get('/mantCchas', array('as'=>'mantCchas', 'uses'=>'CanchaController@index'));
Route::get('/formAddCcha', array('as'=>'formAddCcha', 'uses'=>'CanchaController@formAddCcha'));
Route::post('/addCcha', array('as'=>'addCcha', 'uses'=>'CanchaController@agregarCcha'));
Route::get('/formEditCcha/{id}', array('as'=>'formEditCcha', 'uses'=>'CanchaController@formEditCcha'));
Route::post('/editCcha', array('as'=>'editCcha', 'uses'=>'CanchaController@editCcha'));
Route::get('/elimCcha/{id}', array('as'=>'elimCcha', 'uses'=>'CanchaController@elimCcha'));