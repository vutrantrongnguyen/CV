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
    return view('layouts.app');
});

Auth::routes();

//Route::get('/home', 'InformationController@show')->name('home');
//Route::post('/createInfo','InformationController@store');
Route::get('/home','ConfigController@show');
Route::get('/create',function () {
    return view('config.create');
});
Route::post('/make','ConfigController@make');
Route::put('/config/update','ConfigController@update');
Route::delete('/config/delete','ConfigConroller@delete');