<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Note!!!
|--------------------------------------------------------------------------
| the routes is in the app/routes directory. i divided the routes into different
| file so it can be clean as the system goes larger
|
*/

/*--------------------------------------------------------------------------
|  Routes - app/routes/
|--------------------------------------------------------------------------
| 1. Website   - Website.php
| 2. Dashboard - Dashboard.php 
| 3. Reports   - Reports.php
| 4. Settings  - Settings.php
| 5. Auth      - Auth.php
*/

foreach (glob(dirname(__FILE__)."/routes/*.php") as $filename)
{
    include_once $filename;
}

