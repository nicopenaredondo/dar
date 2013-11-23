<?php

class AuthController extends BaseController 
{
	
	public function getLogin()
	{
		return View::make('auth.index');
	}

	public function postLogin()
	{
		//gather sanitize input 
		$input = array(
			'username'   => Input::get('username'),
			'password' 	 => Input::get('password')
			);

		//set validation rules
		$rules = array(
			'username' => 'required|min:4|max:32',
			'password' => 'required|min:6'
			);

		//run the validator mofo!!! :P 
		$validator = Validator::make($input,$rules);
		if($validator->passes())
		{
			if (Auth::attempt(array('username' => $input['username'], 'password' => $input['password']),true))
			{
			   	return Redirect::to('dashboard');
			}else
			{
				Session::flash('error', 'Invalid username or password.');
				return Redirect::route('login')->withInput();
			}
			
		}else
		{
			return Redirect::to('auth/login')->withErrors($validator)->withInput();
		}
	}

	

}