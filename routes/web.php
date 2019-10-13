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

Route::get('/','FrontPageController@index');
Route::get('/loading','FrontPageController@loading');
Route::get('/report','FrontPageController@report')->name('schedule.report');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'auth'],function(){
    Route::get('jadwalpiket/roling','JadwalPiketController@roling')->name('jadwalpiket.rolling');
    Route::resources([
        'agency'=>'AgencyController',
        'officer'=>'OfficerController',
        'employee'=>'EmployeeController',
        'galery'=>'GaleryController',
        'news'=>'NewsController',
        'transportation_type'=>'TransportationTypeController',
        'transportation'=>'TransportationController',
        'transportation_generate'=>'TransportationGenerateController',
        'schedule'=>'ScheduleController',
        'jadwalpiket'=>'JadwalPiketController',
        'user'=>'UserController',
    ]);
});
