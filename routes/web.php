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
//班级
Route::resource('grades', 'GradesController');
//课程
Route::resource('courses', 'CoursesController');
Route::get('courses/{id}/class', 'CoursesController@class')->name('courses.class');
//课时
Route::resource('teachings', 'TeachingsController');