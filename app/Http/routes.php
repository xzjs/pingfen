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

Route::get('exam/get_message/car_id/{car_id}/time/{time}', 'ExamController@get_message');
Route::get('app','AppController@index');

Route::get('app/page1','AppController@page1');
Route::get('app/page2','AppController@page2');

Route::get('app/detail/{car_id}','AppController@detail');

Route::get('web','WebController@index');
Route::get('match/start/{car_id}','MatchController@start');
Route::get('match/end/{car_id}','MatchController@end');

Route::resource('car', 'CarController');
Route::resource('mission', 'MissionController');
Route::resource('exam', 'ExamController');
Route::resource('group', 'GroupController');
