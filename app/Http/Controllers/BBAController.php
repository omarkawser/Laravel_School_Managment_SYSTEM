<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


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
}
