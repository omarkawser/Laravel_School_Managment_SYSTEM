<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;


class BBAController extends Controller
{
    public function BBA(){

         $bba_student_info=DB::table('students_tbl')
                    ->where(['student_department'=>'BBA'])
                      ->get();
                  
            $bba_student=view('admin.Course.bba')
                       ->with('bba_student_info',$bba_student_info );
                       
                       return view('layout')
                       ->with('bba',$bba_student);
        
 
     }



     public function delete_bba($student_id){

    
          DB::table('students_tbl')
                       ->where('student_id',  $student_id)
                        ->delete();
  
            return Redirect::to('/bba');      
  
     }
  
}
