<?php

Route::group(['middleware' => 'web', 'prefix' => 'homepage', 'namespace' => 'Modules\Frontend\Http\Controllers'], function()
{
    Route::get('/', 'FrontendController@index');

});

Route::group(['middleware' => 'web', 'namespace' => 'Modules\Frontend\Http\Controllers'], function()
{
    Route::get('/dien-thoai', 'FrontendController@showListProducts');
    Route::get('/dien-thoai/{id}-{any}', 'FrontendController@infoProdcut');
    Route::get('/dien-thoai/filter-res/{res}', 'FrontendController@filterByRes');
    Route::get('/kinh', 'FrontendController@setMinPrice');
});