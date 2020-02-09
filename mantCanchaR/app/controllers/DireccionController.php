<?php



class DireccionController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$lDirs=Direccion::all();

		return View::make('direccion.index')->with('lDirs', $lDirs);
	}

	public function formAgregDir(){
		return View::make('direccion.agregar');
	}

	public function agregarDir(){
		$formData=Input::all();
		$dt=new DateTime();
		
		$data=array('calle'=>$formData['txtCalle'], 'numeracion'=>$formData['nmbNumeracion'], 'created_at'=>$dt);

		DB::table('Direccions')->insert($data);

		return Redirect::route('mantDirs');
	}

	public function formEditDir($id){
		$dirEnc= DB::table('Direccions')
			->where('id',$id)
			->first();

		return View::make('direccion.edicion', array('dirEnc'=>$dirEnc));
	}

	public function editDir(){
		$formData=Input::all();
		$dt=new DateTime();

		$data=array('calle'=>$formData['txtCalle'], 'numeracion'=>$formData['nmbNumeracion'], 'updated_at'=>$dt);

		DB::table('Direccions')
			->where('id', $formData['id'])
			->update($data);

		return Redirect::route('mantDirs');
	}

	public function elimDir($id){
		DB::table('Direccions')
			->where('id', $id)
			->delete();

		return Redirect::back();
	}

}
