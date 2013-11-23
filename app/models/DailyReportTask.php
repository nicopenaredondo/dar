<?php

class DailyReportTask extends Eloquent 
{
	protected $guarded 		= array();
	public static $rules 	= array();

	public function dailyreport()
	{
		$this->belongsTo('DailyReport','daily_report_id');
	}
}
