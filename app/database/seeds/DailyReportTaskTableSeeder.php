<?php

class DailyReportTaskTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		 DB::table('daily_report_task')->truncate();

		$daily_report_task = array(
			'daily_report_id' => 1,
			'task_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, ea, blanditiis, magnam exercitationem debitis recusandae minima tempore veritatis itaque earum explicabo id odit fugit quis veniam repellendus excepturi. Molestiae, hic.',
			'duration' => 3000
		);

		// Uncomment the below to run the seeder
		 DB::table('daily_report_task')->insert($daily_report_task);
	}

}
