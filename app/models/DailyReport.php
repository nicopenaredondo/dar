<?php

class DailyReport extends Eloquent 
{
	protected $guarded 		= array();
	public static $rules 	= array();

	public function user()
	{
		$this->belongsTo('User','user_id');
	}

	public function dailyreporttask()
	{
		$this->hasMany('DailyReportTask','daily_report_id');
	}
}
