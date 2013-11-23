<?php

class UserProfileTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('user_profile')->truncate();

		$user_profile = array(
			'user_id' 	  => 1,
			'first_name'  => 'Nico',
			'middle_name' => 'Romero',
			'last_name'   => 'Penaredondo',
			'address'	  => '#4 Pluto St Sto Nino Phase 2 Meycauayan City Bulacan',
			'contact_number' => '09264746458',
			'emergency_contact_number' => '09228031358',
			'created_at'  => date('Y-m-d H:i:s'),
			'updated_at'  => date('Y-m-d H:i:s')
		);

		// Uncomment the below to run the seeder
		 DB::table('user_profile')->insert($user_profile);
	}

}
