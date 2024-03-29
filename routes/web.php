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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/request', 'RequestController@index')->name('request.home');
Route::get('/request/{id}', 'RequestController@showRequest')->name('request.detail');


// 后台路由
Route::get('/admin', 'RequestController@index')->name('admin');
Route::middleware('auth')->namespace('Admin')->group(function () {
    Route::resource('admin/request', 'RequestController');
    Route::resource('admin/tag', 'TagController');
    Route::get('admin/upload', 'UploadController@index');
});

