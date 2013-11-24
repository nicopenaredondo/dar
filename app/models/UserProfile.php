<?php

class UserProfile extends Eloquent 
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'user_profile';

	/**
	 * The primary key used by the model.
	 *
	 * @var string
	 */
	protected $primaryKey = 'user_profile_id';


	public function user()
	{
		return $this->belongsTo('User','user_id');
	}
}
