<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/register', function(){
    return redirect('/login');
})->name('register');
Route::get('/password/reset', function(){
    return redirect('/login');
})->name('password.request');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
