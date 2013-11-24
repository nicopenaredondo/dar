<?php

class DailyReportTask extends Eloquent 
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'daily_report_task';

	/**
	 * The primary key used by the model.
	 *
	 * @var string
	 */
	protected $table = 'daily_report_task_id';


	public function dailyreport()
	{
		$this->belongsTo('DailyReport','daily_report_id');
	}
}
