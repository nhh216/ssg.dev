<?php

Route::group(['middleware' => ['web','auth'], 'prefix' => 'backend', 'namespace' => 'Modules\Backend\Http\Controllers'], function()
{
    Route::get('/dashboard', 'BackendController@showDashboard');
    Route::get('/config', 'BackendController@siteConfig')->name('siteconfig');
});
