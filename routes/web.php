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
    return view('welcome');
});

Route::get('/wells', 'WellController@index');
Route::get('/wells/{well}', 'WellController@show');
Route::get('/wells_create', 'WellController@store');

Route::get('/resources', 'ResourceController@index');
Route::get('/mine', 'DrillController@mine');

Route::get('/drill_create/{well_id}', 'DrillController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
