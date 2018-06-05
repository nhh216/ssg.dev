<?php

Route::group(['middleware' => 'web', 'prefix' => 'homepage', 'namespace' => 'Modules\Frontend\Http\Controllers'], function()
{
    Route::get('/', 'FrontendController@index');

});

Route::group(['middleware' => 'web', 'namespace' => 'Modules\Frontend\Http\Controllers'], function()
{
    Route::get('/dien-thoai', 'FrontendController@showListProducts');
    Route::get('/dien-thoai/', 'FrontendController@filterPro');
    Route::get('/dien-thoai/{id}-{any}', 'FrontendController@infoProdcut');
    Route::get('/find-product/{name}', 'FrontendController@getProductByName');
    Route::get('/tin-tuc', 'FrontendController@showListNews');
    Route::get('/tin-tuc/{id}-{any}', 'FrontendController@readNew');
    Route::get('/danh-sach-tin-tuc/{id}-{any}', 'FrontendController@listByCategory');
    Route::get('/ma-giam-gia/', 'FrontendController@listCoupon');
});