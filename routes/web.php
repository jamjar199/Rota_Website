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

//Shift Routes
Route::get('rota/name/{name}', 'ShiftController@shiftsByWeek');

Route::get('rota/name/{name}/date/{date}', 'ShiftController@shiftsByDate');

//Event Routes
Route::get('rota/event', 'EventController@eventsToday');

Route::get('rota/event/date/{date}', 'EventController@eventsByDate');

Route::get('rota/event/{room}', 'EventController@eventInRoomToday');

Route::get('rota/event/{room}/date/{date}', 'EventController@eventInRoomByDate');