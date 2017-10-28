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

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');
// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');
Route::get('/home/authorized-clients', 'HomeController@getAuthorizedClients')->name('authorized-clients');
Route::get('/home/my-clients', 'HomeController@getClients')->name('personal-clients');
Route::get('/home/my-tokens', 'HomeController@getTokens')->name('personal-tokens');
Route::get('/home', 'HomeController@index');


Route::get('/dashbord', 'Dashbord\DashbordController@index');
Route::get('/dashbord/upload', 'Dashbord\DashbordController@upload');

//Test
//Route::get('/testa', 'Client\ClientController@obtainAccessToken');
Route::get('/test/student/remove', 'Test\StudentController@getRemoveStudent');
Route::post('/test/student/remove', 'Test\StudentController@postRemoveStudent');
Route::delete('/test/student/remove', 'Test\StudentController@deleteRemoveStudent');
Route::get('/test/teacher/remove', 'Test\TeacherController@getRemoveTeacher');
Route::post('/test/teacher/remove', 'Test\TeacherController@postRemoveTeacher');
Route::delete('/test/teacher/remove', 'Test\TeacherController@deleteRemoveTeacher');
Route::get('/test/teacher/update', 'Test\TeacherController@getUpdateTeacher');
Route::post('/test/teacher/update', 'Test\TeacherController@postUpdateTeacher');
Route::put('/test/teacher/update', 'Test\TeacherController@putUpdateTeacher');
Route::get('/test/student/update', 'Test\StudentController@getUpdateStudent');
Route::post('/test/student/update', 'Test\StudentController@postUpdateStudent');
Route::put('/test/student/update', 'Test\StudentController@putUpdateStudent');
Route::get('/test/student/create', 'Test\StudentController@getCreateStudent');
Route::post('/test/student/create', 'Test\StudentController@postCreateStudent');
Route::get('/test/teacher/create', 'Test\TeacherController@getCreateTeacher');
Route::post('/test/teacher/create', 'Test\TeacherController@postCreateTeacher');

Route::get('/test/course', 'Test\CourseController@getInputCourse');
Route::post('/test/course', 'Test\CourseController@postOneCourse');
Route::get('/test/teacher', 'Test\TeacherController@getInputTeacher');
Route::post('/test/teacher', 'Test\TeacherController@postOneTeacher');
Route::get('/test/student', 'Test\StudentController@getInputStudent');
Route::post('/test/student', 'Test\StudentController@postOneStudent');
Route::get('/test/courses', 'Test\CourseController@getAllCourses');
Route::get('/test/teachers', 'Test\TeacherController@getAllTeachers');
Route::get('/test/students', 'Test\StudentController@getAllStudents');


Route::get('/test', function() {
    return view('test.main');
});

Route::get('/', function() {
    return view('welcome');
})->middleware('guest');
