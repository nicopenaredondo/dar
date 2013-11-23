<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('users')->truncate();

		$users = array(
			'role_id'  => 3,
			'username' => 'nicopenaredondo',
			'password' =>  Hash::make('niconico'),
			'forgot_password_token'    => uniqid(md5(rand()), true),
			'email_verification_token' => uniqid(md5(rand()), true),
			'status' => 'Verified',
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		);

		// Uncomment the below to run the seeder
		DB::table('users')->insert($users);
	}

}
