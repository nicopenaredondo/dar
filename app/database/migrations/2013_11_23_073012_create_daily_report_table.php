<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDailyReportTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('daily_report', function(Blueprint $table) {
			$table->increments('daily_report_id');
			$table->string('project_name',64);
			$table->timestamp('time_in');
			$table->timestamp('time_out');
			$table->date('date_filed');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('daily_report');
	}

}
