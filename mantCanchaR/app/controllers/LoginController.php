<?php

class LoginController extends BaseController {

	public function login ()
	{
		$fData=Input::all();

		$data=array('username'=>$fData['txtUsname'], 'password'=>$fData['txtPass']);

		if(Auth::attempt($data)){
			return "logeado";
		}
		else{
			return "error";
		}
	}
}
