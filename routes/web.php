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
Route::group(['namespace' => 'Auth'], function () {
    Route::get('/login', 'LoginController@form')->name('login');
    Route::post('/login', 'LoginController@login')->name('loginPost');
    Route::get('/logout', 'LoginController@logout')->name('logout');
    //注册
    Route::post('/register', 'RegisterController@store')->name('register');
});
//班级
Route::resource('grades', 'GradesController');
//课程
Route::resource('courses', 'CoursesController');
Route::get('courses/{id}/class', 'CoursesController@class')->name('courses.class');
//课时
Route::resource('teachings', 'TeachingsController');
//短信
Route::any('/sms/send', 'SmsController@send')->name('sms.send');