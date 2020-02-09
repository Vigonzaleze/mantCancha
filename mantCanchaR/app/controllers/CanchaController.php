<?php



class CanchaController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$lCchas=Cancha::all();

		return View::make('cancha.index')->with('lCchas',$lCchas); 
	}

	public function formAddCcha()
	{
		$lDirs=Direccion::all();

		return View::make('cancha.agregar')->with('lDirs', $lDirs);
	}

	public function agregarCcha()
	{
		$formData=Input::all();
		$dt=new DateTime();

		$data=array('nombre'=>$formData['txtNombre'], 'estado'=>0, 'precio'=>$formData['nmbPrecio'],
			'direccion_id'=>$formData['selDir'], 'created_at'=>$dt);

		DB::table('Canchas')->insert($data);

		return Redirect::route('mantCchas');
	}

	public function formEditCcha($id)
	{
		$cchaEnc=Cancha::find($id);

		return View::make('cancha.edicion')->with('cchaEnc',$cchaEnc);
	}

	public function editCcha()
	{
		$formData=Input::all();
		$dt=new DateTime();

		$data=array('nombre'=>$formData['txtNombre'], 'precio'=>$formData['nmbPrecio'], 'updated_at'=>$dt);

		DB::table('Canchas')->where('id', $formData['id'])->update($data);

		return Redirect::route('mantCchas');
	}

	public function elimCcha($id)
	{
		// Cancha::find($id)->delete();
		DB::table('Canchas')->where('id',$id)->delete();

		return Redirect::back();
	}
}
