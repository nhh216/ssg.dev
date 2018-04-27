<?php

Route::group(['middleware' => 'web', 'prefix' => 'homepage', 'namespace' => 'Modules\Frontend\Http\Controllers'], function()
{
    Route::get('/', 'FrontendController@index');
    Route::get('/dien-thoai', 'FrontendController@showListProducts');
});
