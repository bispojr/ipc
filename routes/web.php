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

Route::get('/admin/username/problem', "ProblemController@adminIndex");
Route::get('/admin/username/problem/create', "ProblemController@adminCreate");
Route::get('/admin/username/problem/create/success', "ProblemController@adminCreateSuccess");
Route::get('/admin/username/problem/create/error', "ProblemController@adminCreateError");
Route::get('/admin/username/problem/code', "ProblemController@adminCode");
Route::get('/admin/username/problem/code/edit', "ProblemController@adminCodeEdit");
Route::get('/admin/username/problem/code/edit/success', "ProblemController@adminCodeEditSuccess");
Route::get('/admin/username/problem/code/edit/error', "ProblemController@adminCodeEditError");
Route::get('/admin/username/problem/code/delete', "ProblemController@adminCodeDelete");
Route::get('/admin/username/problem/code/delete/success', "ProblemController@adminCodeDeleteSuccess");

Route::get('/admin/username/lesson', "LessonController@adminIndex");
Route::get('/admin/username/lesson/create', "LessonController@adminCreate");
Route::get('/admin/username/lesson/create/success', "LessonController@adminCreateSuccess");
Route::get('/admin/username/lesson/create/error', "LessonController@adminCreateError");
Route::get('/admin/username/lesson/code', "LessonController@adminCode");
Route::get('/admin/username/lesson/code/edit', "LessonController@adminCodeEdit");
Route::get('/admin/username/lesson/code/edit/success', "LessonController@adminCodeEditSuccess");
Route::get('/admin/username/lesson/code/edit/error', "LessonController@adminCodeEditError");
Route::get('/admin/username/lesson/code/delete', "LessonController@adminCodeDelete");
Route::get('/admin/username/lesson/code/delete/success', "LessonController@adminCodeDeleteSuccess");

Route::get('/admin/username/frequency', "FrequencyController@adminIndex");

Route::get('/admin/username/course/{course}/section/{section}/frequency', "SectionController@frequency");
