<?php

Route::group(['middleware' => ['web','auth'], 'prefix' => 'admin', 'namespace' => 'Modules\Backend\Http\Controllers'], function()
{
    Route::get('/', 'BackendController@index');
    Route::get('/dashboard', 'BackendController@showDashboard');
    Route::get('/config', 'BackendController@siteConfig')->name('siteconfig');
    Route::get('/list-products', 'ProductController@listProduct')->name('listProduct');
    Route::get('/show-product/{id}','ProductController@getProduct');
    Route::get('/list-manufacture','ProductController@getListManufacture');
    Route::put('/update/product','ProductController@updateProduct');
    Route::post('/new-product','ProductController@newProduct');

    Route::put('/update/post','NewController@updatePost');
    Route::get('/editor-news/','NewController@showEditorPage');
    Route::post('/save-post/','NewController@newPost');
    Route::get('/list-post/','NewController@editPost');
    Route::get('/show-post/{id}','NewController@showPost');
    Route::post('/update/post/','NewController@updatePost');
    Route::post('/coupon-manager/','CouponController@updatePost');


    Route::get('/category-manager/','BackendController@categoryManager');
    Route::get('/home-ads/','BannerController@editBannerADS');
});


Route::group(['middleware' => ['web','auth'],  'prefix' => 'backend' ,'namespace' => 'Modules\Backend\Http\Controllers'], function()
{
    Route::get('/new-categories','BackendController@getNewCategories');
});


