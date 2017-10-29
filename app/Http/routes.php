<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',"PageController@index");
Route::get('dashboard',"PageController@dashboard");
Route::get('aadhaar',"PageController@aadhaar");
Route::get('pension_auto',"PageController@pension_auto");
Route::get('pension_manual',"PageController@pension_manual");
Route::get('payment_folder',"PageController@payment_folder");
Route::get('reports',"PageController@reports");
Route::get('passbook',"PageController@passbook");
Route::get('reports',"PageController@reports");
Route::get('reports',"PageController@reports");
Route::get('reports',"PageController@reports");