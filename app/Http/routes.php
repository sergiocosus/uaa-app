<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/building', 'BuildingController@index');
Route::get('/exam-schedule', 'ExamScheduleController@index');
Route::get('/user', 'UserController@getCurrent');
Route::get('/schedule', 'ScheduleController@index');
Route::get('/offer', 'OfferController@index');

Route::post('/auth/login', 'Auth\AuthController@postLogin');
Route::get('/auth/logout', 'Auth\AuthController@getLogout');


