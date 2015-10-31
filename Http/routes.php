<?php

Route::group(['namespace' => 'Modules\Dashboard\Http\Controllers'], function()
{
	Route::get('/', ['as' => 'dashboard.frontend', 'uses' => 'DashboardController@frontend']);
});

Route::group(['prefix'=>'admin','namespace' => 'Modules\Dashboard\Http\Controllers'], function()
{
	Route::get('/', ['as' => 'dashboard.admin', 'uses' => 'DashboardController@backend']);
});

Route::group(['prefix'=>'learning','namespace' => 'Modules\Dashboard\Http\Controllers'], function()
{
	Route::get('/', ['as' => 'dashboard.learning', 'uses' => 'DashboardController@learning']);
});