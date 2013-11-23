<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDailyReportTaskTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('daily_report_task', function(Blueprint $table) {
			$table->increments('daily_report_task_id');
			$table->integer('daily_report_id');
			$table->text('task_description');
			$table->integer('duration');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('daily_report_task');
	}

}
