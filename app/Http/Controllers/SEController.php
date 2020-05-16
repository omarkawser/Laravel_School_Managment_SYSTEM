<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;

class SEController extends Controller
{
    public function SE(){


     $se_student=DB::table('students_tbl')
                 ->where(['student_department'=>'SE'])
                 ->get();



         $sestudent_info=view('admin.Course.se')
          ->with('se_student_info',$se_student);
          
          return view('layout')
           ->with('se',$sestudent_info);

        return view('admin.Course.se');
        
 
     }

    // delete
     public function delete_se($student_id){

    
      DB::table('students_tbl')
                   ->where('student_id',  $student_id)
                    ->delete();

        return Redirect::to('/se');      

 }




}
