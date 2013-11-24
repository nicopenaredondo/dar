<?php

class DailyReport extends Eloquent 
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'daily_report';

	/**
	 * The primary key used by the model.
	 *
	 * @var string
	 */
	protected $table = 'daily_report_id';


	public function user()
	{
		$this->belongsTo('User','user_id');
	}

	public function dailyreporttask()
	{
		$this->hasMany('DailyReportTask','daily_report_id');
	}
}
