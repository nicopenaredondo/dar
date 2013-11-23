<?php
Route::group(array('prefix' => 'auth'),function(){
	
	Route::get('/',function(){
		return Redirect::to('auth/login');
	});

	Route::get('login',array('as' => 'login', 'uses' => 'AuthController@getLogin'));
	Route::post('login',array('before' => 'csrf', 'uses' => 'AuthController@postLogin'));

	Route::get('register',array('as' => 'register', 'uses' => 'AuthController@getRegister'));
	Route::post('register',array('before' => 'csrf', 'uses' => 'AuthController@postRegister'));

	Route::get('forgot-password',array('as' => 'forgot-password', 'uses' => 'AuthController@getForgotPassword'));
	Route::post('forgot-password',array('before' => 'csrf', 'uses' => 'AuthController@postForgotPassword'));

});