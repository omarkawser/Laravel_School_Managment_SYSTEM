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


Route::get('/logout', 'AdminController@logout');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/backend', function () {
    return view('admin.admin_login');
});



//admin profile
Route::post('/adminlogin', 'AdminController@login_dashboard');
Route::get('/admin_dashboard', 'AdminController@admin_dashboard');
Route::get('/setting', 'SettingController@setting');
Route::get('/viewprofile',  'ViewProfileController@view');



// add student
Route::get('/addstudent', 'AddstudentsController@addstudent');
Route::post('/save_student', 'AddstudentsController@savestudent');
// Delete student
Route::get('/student_delete/{student_id}', 'AllstudentsController@studentdelete');
// show  all student
Route::get('/allstudent', 'AllstudentsController@allstudent');
// view student
Route::get('/viewstudent/{student_id}', 'AllstudentsController@viewstudent');
// edit student
Route::get('/edit_student/{student_id}', 'AllstudentsController@editstudent');
//update  student
Route::post('/update_student/{student_id}', 'AllstudentsController@updatestudent');







// all teacher

Route::get('/allteacher', 'TeacherController@allTeacher');

// tution fee
Route::get('/tutionfee', 'tutionsController@tution');


// course add 
Route::get('/cse', 'CSEController@CSE');
Route::get('/eee', 'EEEController@EEE');
Route::get('/bba', 'BBAController@BBA');
Route::get('/mba', 'MBAController@MBA');
Route::get('/se',  'SEController@SE');



