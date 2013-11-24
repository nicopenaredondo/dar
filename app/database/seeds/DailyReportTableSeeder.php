<?php

class DailyReportTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('daily_report')->truncate();

		$daily_report = array(
			'user_id' => 1,
			'project_name' => 'Paywizard',
			'time_in' => date('Y-m-d H:i:s'),
			'time_out' => date('Y-m-d H:i:s'),
			'date_filed' => date('Y-m-d'),
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		);

		// Uncomment the below to run the seeder
		DB::table('daily_report')->insert($daily_report);
	}

}
