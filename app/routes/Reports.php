<?php
Route::group(array('before' => 'auth','prefix' => 'reports'),function(){
	Route::get('/',array('as' => 'reports', 'uses' => 'ReportsController@getIndex'));
});