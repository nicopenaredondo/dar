<?php

class RoleTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('role')->truncate();

		$role = array(
			array(
				'role_name'  => 'Administrator',
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
			),
			array(
				'role_name'  => 'Manager',
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
			),
			array(
				'role_name'  => 'Employee',
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
			)
		);

		// Uncomment the below to run the seeder
		 DB::table('role')->insert($role);
	}

}
