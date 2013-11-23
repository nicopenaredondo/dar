<?php 
Route::group(array('before' => 'auth'),function(){
	Route::get('dashboard',array('as' => 'dashboard','uses' => 'DashboardController@getIndex'));
});