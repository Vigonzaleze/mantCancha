<?php

class TipoUserController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tpUser = TipoUser::all();

		return View::make('tipoUser.index')->with('lTps', $tpUser);
	}


	public function crearTpUser(){
		return View::make('tipoUser.agregar');
	}

	public function agregarTpUs(){
		$insert=Input::all();
		$dt=new DateTime();
		
		$data=array('tipo'=>$insert['txtTipo'], 'created_at'=> $dt);

		DB::table('TipoUsers')->insert($data);

		return Redirect::route('mantTpUs');
	}

	public function formEdit($id){
		$tpUsEnc= DB::table('TipoUsers')
			->where('id',$id)
			->first();

		return View::make('tipoUser.edicion', array('tpUs'=>$tpUsEnc));
	}

	public function editTpUs(){
		$formData=Input::all();
		
		$data=array('tipo'=>$formData['txtTipo']);

		DB::table('TipoUsers')->where('id',$formData['id'])->update($data);

		return Redirect::route('mantTpUs');
	}

	public function elimTpUs($id){
		DB::table('TipoUsers')->where('id',$id)->delete();
		
		return Redirect::back();
	}

}
