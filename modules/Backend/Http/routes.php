<?php

Route::group(['middleware' => ['web','auth'], 'prefix' => 'admin', 'namespace' => 'Modules\Backend\Http\Controllers'], function()
{
    Route::get('/dashboard', 'BackendController@showDashboard');
    Route::get('/config', 'BackendController@siteConfig')->name('siteconfig');
    Route::get('/list-products', 'ProductController@listProduct')->name('listProduct');
    Route::get('/show-product/{id}','ProductController@getProduct');
    Route::get('/list-manufacture','ProductController@getListManufacture');
    Route::put('/update/product','ProductController@updateProduct');
    Route::post('/new-product','ProductController@newProduct');
    Route::get('/list-new/','NewController@showEditorPage');
    Route::get('/home-ads/','BannerController@editBannerADS');
});



