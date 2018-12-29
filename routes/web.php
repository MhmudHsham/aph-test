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

Route::group(["middleware"=>["auth"], "prefix" => "admin"], function() {
    Route::get('/', 'Admin\HomeController@index');
    Route::get('settings', 'Admin\SettingController@getSettings');
    Route::post('settings', 'Admin\SettingController@setSettings');
    Route::resource('categories', 'Admin\CategoryController');
    Route::resource('sliders', 'Admin\SliderController');
    Route::resource('journals', 'Admin\JournalController');
});


Route::get('/', 'HomeController@index');
Route::get('journals', "JournalController@index");
Route::get('journals/details/{journal_id}', "JournalController@details");
