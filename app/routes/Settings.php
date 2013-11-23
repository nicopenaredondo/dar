<?php
Route::group(array('before' => 'auth','prefix' => 'settings'),function(){
	Route::get('/',array('as' => 'settings', 'uses' => 'SettingsController@getIndex'));
});