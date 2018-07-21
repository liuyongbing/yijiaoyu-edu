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
    return redirect(route('grades.index'));
});
Route::group(['namespace' => 'Auth'], function () {
    Route::get('/login', 'LoginController@form')->name('login');
    Route::post('/login', 'LoginController@auth')->name('auth');
    Route::get('/logout', 'LoginController@logout')->name('logout');
});
//班级
Route::resource('grades', 'GradesController');
//课程
Route::resource('courses', 'CoursesController');
Route::get('courses/{id}/class', 'CoursesController@class')->name('courses.class');
//课件
Route::resource('coursewares', 'CoursewaresController');
//课时
Route::resource('teachings', 'TeachingsController');
//短信
Route::post('/sms/send', 'SmsController@send')->name('sms.send');