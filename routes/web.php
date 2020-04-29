<?php

use Illuminate\Support\Facades\Route;

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
    return view('homepage');
});
Route::get('/default',function () {
    return view('layouts.default');
});
Route::get('/home',function () {
    return view('homepage');
});

Route::get('/class_info','ClassController@getGrade');
Route::get('/class_info/{grade}','ClassController@getClass');
Route::get('/class_info/{grade}/{class}','ClassController@getListStudent');

Route::get('/student_info/mshs={id}','StudentController@getStudent')->name('getStudentInfo');
Route::get('/student_info','StudentController@getStudent_Info_Page');
Route::post('/student_info','StudentController@postStudentID')->name('postStudentID');

Route::get('/teacher_info/msgv={id}','TeacherController@getTeacher')->name('getTeacherInfo');
Route::get('/teacher_info','TeacherController@getTeacher_Info_Page');
Route::post('/teacher_info','TeacherController@postTeacherID')->name('postTeacherID');
