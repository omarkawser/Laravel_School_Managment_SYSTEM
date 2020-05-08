<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();




class AllstudentsController extends Controller
{

     // show student
    public function allstudent(){

    
         $allstudent_info=DB::table('students_tbl')
                          ->get();

        $manage_student=view('admin.AllStudent')
                          ->with('all_student_info',$allstudent_info);
        
                          return view('layout')
                                  ->with('AllStudent', $manage_student);


    //    return view('admin.AllStudent');
       

    }
    
     // delete student

    public function studentdelete($student_id){

    
        DB::table('students_tbl')
                     ->where('student_id',  $student_id)
                      ->delete();

          return Redirect::to('/allstudent');      

   }

 // student view are here 
 public function viewstudent($student_id){

    
  $student_info_view=DB::table('students_tbl')
                  ->select('*')
                ->where('student_id', $student_id)
                ->first();


        $manage_student_view=view('admin.students_view')
             ->with('stu_info_view', $student_info_view);

                return view('layout')
                 ->with('admin.students_view',$manage_student_view);



             //  return view('admin.students_view');




}



 // student edit are here 
 public function editstudent($student_id){

    
  $student_info_view=DB::table('students_tbl')
                  ->select('*')
                ->where('student_id', $student_id)
                ->first();


        $manage_student_view=view('admin.student_edit')
             ->with('stu_info_view', $student_info_view);

                return view('layout')
                 ->with('admin.student_edit',$manage_student_view);



             //  return view('admin.students_view');




}



//update student part are here 


public function updatestudent(Request $req, $student_id){

   
 $data=array();

 $data['student_name']=$req->student_name ;
 $data['student_roll']=$req->student_roll ;
 $data['student_fathername']=$req->student_fathername;
 $data['student_mothername']=$req->student_mothername ;
 $data['student_email']=$req->student_email ;
 $data['student_address']=$req->student_address ;
 $data['student_password']=$req->student_password ;
 $data['student_admission_year']=$req->student_admission_year ;


        DB::table('students_tbl')
           ->where('student_id', $student_id)
           ->update($data);
           
           
           Session::put('exception', 'student update successfully');
           return Redirect::to('/allstudent');

    




}






}
