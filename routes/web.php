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
//Add teacher
Route::get('//addteacher', 'TeacherController@addTeacher');
//save teacher
Route::post('/save_teacher', 'TeacherController@saveteacher');
// delete Teacher
Route::get('/teacher_delete/{teacher_id}', 'TeacherController@deleteTeacher');



// tution fee
Route::get('/tutionfee', 'tutionsController@tution');


// set exam
Route::get('/set_exam', 'SETEXAMController@setexam');
Route::get('/view_exam', 'SETEXAMController@viewexam');
// add exam
Route::post('/add_exam', 'SETEXAMController@addexam');
// delete exam
Route::get('/delete_exam/{exam_id}', 'SETEXAMController@deleteexam');




// course add 
Route::get('/cse', 'CSEController@CSE');
Route::get('/eee', 'EEEController@EEE');
Route::get('/bba', 'BBAController@BBA');
Route::get('/mba', 'MBAController@MBA');
Route::get('/se',  'SEController@SE');


// library 
Route::get('/addbook', 'libraryContoller@add_book');
// add book
Route::post('/save_book', 'libraryContoller@savebook');
//show book
Route::get('/showbook', 'libraryContoller@show_book');
// issue book
Route::get('/issue_book', 'BookIssueController@issuebook');
// issued book
Route::get('/issued_book', 'BookIssueController@issuedbook');
// return book
Route::get('/return_book', 'BookIssueController@returnbook');



//Accountant
Route::get('/addexpense', 'ExpenseController@add_expense');
//Accountant
Route::post('/saveexpense', 'ExpenseController@save_expense');
//account dashboard
Route::get('/accountdashboard', 'ExpenseController@dashboard');
//delete expense
Route::get('/deleteexpense/{id}', 'ExpenseController@deleteexpene');

// show expanse
Route::get('/showexpense', 'ExpenseController@show_expense');
// edit  expanse
Route::get('/editexpense', 'ExpenseController@edit_expense');

