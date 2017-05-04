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

Route::get('/', "HomeController@index");

Route::get('/login/student', "LoginController@student");
Route::get('/login/student/error', "LoginController@studentError");
Route::get('/login/admin', "LoginController@admin");
Route::get('/login/admin/error', "LoginController@adminError");

Route::get('/admin/username', "AdminController@index");

Route::get('/admin/username/student', "StudentController@adminIndex");
Route::get('/admin/username/student/create', "StudentController@adminCreate");
Route::get('/admin/username/student/create/success', "StudentController@adminCreateSuccess");
Route::get('/admin/username/student/create/error', "StudentController@adminCreateError");
Route::get('/admin/username/student/username', "StudentController@adminUsername");
Route::get('/admin/username/student/username/edit', "StudentController@adminUsernameEdit");
Route::get('/admin/username/student/username/edit/success', "StudentController@adminUsernameEditSuccess");
Route::get('/admin/username/student/username/edit/error', "StudentController@adminUsernameEditError");
Route::get('/admin/username/student/username/delete', "StudentController@adminUsernameDelete");
Route::get('/admin/username/student/username/delete/success', "StudentController@adminUsernameDeleteSuccess");

Route::get('/admin/username/question', "QuestionController@index");
