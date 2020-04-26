<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class CSEController extends Controller
{
    public function CSE(){


        $csestudent_info=DB::table('students_tbl')
                           ->where (['student_department'=>'CSE'])
                          ->get();



        $cse_student=view('admin.Course.cse')
                         ->with('cse_student_info',$csestudent_info);
        
                              return view('layout')
                             ->with('cse', $cse_student);



        return view('admin.Course.cse');
        
 
     }
}
