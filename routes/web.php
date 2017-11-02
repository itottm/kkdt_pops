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
Route::get('/test/courses/students/remove', 'Test\CourseStudentController@getRemoveStudent');
Route::post('/test/courses/students/remove', 'Test\CourseStudentController@postRemoveStudent');
Route::delete('/test/courses/students/remove', 'Test\CourseStudentController@deleteRemoveStudent');
Route::get('/test/teachers/courses/remove', 'Test\TeacherCourseController@getRemoveCourse');
Route::post('/test/teachers/courses/remove', 'Test\TeacherCourseController@postRemoveCourse');
Route::delete('/test/teachers/courses/remove', 'Test\TeacherCourseController@deleteRemoveCourse');
Route::get('/test/teachers/courses/update', 'Test\TeacherCourseController@getUpdateCourse');
Route::post('/test/teachers/courses/update', 'Test\TeacherCourseController@postUpdateCourse');
Route::put('/test/teachers/courses/update', 'Test\TeacherCourseController@putUpdateCourse');
Route::get('/test/courses/students/add', 'Test\CourseStudentController@getAddStudent');
Route::post('/test/courses/students/add', 'Test\CourseStudentController@postAddStudent');
Route::get('/test/teachers/courses/create', 'Test\TeacherCourseController@getCreateCourse');
Route::post('/test/teachers/courses/create', 'Test\TeacherCourseController@postCreateCourse');
Route::get('/test/teachers/courses', 'Test\TeacherCourseController@getShowAllTeachers');
Route::post('/test/teachers/courses', 'Test\TeacherCourseController@postShowTeacherCourses');
Route::get('/test/courses/students', 'Test\CourseStudentController@getShowAllCourses');
Route::post('/test/courses/students', 'Test\CourseStudentController@postShowCourseStudents');
Route::get('/test/teacher/remove', 'Test\TeacherController@getRemoveTeacher');
Route::post('/test/teacher/remove', 'Test\TeacherController@postRemoveTeacher');
Route::delete('/test/teacher/remove', 'Test\TeacherController@deleteRemoveTeacher');
Route::get('/test/student/remove', 'Test\StudentController@getRemoveStudent');
Route::post('/test/student/remove', 'Test\StudentController@postRemoveStudent');
Route::delete('/test/student/remove', 'Test\StudentController@deleteRemoveStudent');
Route::get('/test/teacher/update', 'Test\TeacherController@getUpdateTeacher');
Route::post('/test/teacher/update', 'Test\TeacherController@postUpdateTeacher');
Route::put('/test/teacher/update', 'Test\TeacherController@putUpdateTeacher');
Route::get('/test/student/update', 'Test\StudentController@getUpdateStudent');
Route::post('/test/student/update', 'Test\StudentController@postUpdateStudent');
Route::put('/test/student/update', 'Test\StudentController@putUpdateStudent');
Route::get('/test/teacher/create', 'Test\TeacherController@getCreateTeacher');
Route::post('/test/teacher/create', 'Test\TeacherController@postCreateTeacher');
Route::get('/test/student/create', 'Test\StudentController@getCreateStudent');
Route::post('/test/student/create', 'Test\StudentController@postCreateStudent');
Route::get('/test/course', 'Test\CourseController@getInputCourse');
Route::post('/test/course', 'Test\CourseController@postOneCourse');
Route::get('/test/teacher', 'Test\TeacherController@getInputTeacher');
Route::post('/test/teacher', 'Test\TeacherController@postOneTeacher');
Route::get('/test/student', 'Test\StudentController@getInputStudent');
Route::post('/test/student', 'Test\StudentController@postOneStudent');
Route::get('/test/teachers', 'Test\TeacherController@getAllTeachers');
Route::get('/test/courses', 'Test\CourseController@getAllCourses');
Route::get('/test/students', 'Test\StudentController@getAllStudents');



Route::get('/test', function() {
    return view('test.main');
});

Route::get('/', function() {
    return view('welcome');
})->middleware('guest');
