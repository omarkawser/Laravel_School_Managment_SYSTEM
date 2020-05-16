<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;

class EEEController extends Controller
{
   
    public function EEE(){

        $eeestudent_info=DB::table('students_tbl')
        ->where (['student_department'=>'EEE'])
       ->get();



$eee_student=view('admin.Course.eee')
      ->with('eee_student_info',$eeestudent_info);

           return view('layout')
          ->with('eee', $eee_student);



return view('admin.Course.eee');
        
 
     }


     public function delete_eee($student_id){

    
          DB::table('students_tbl')
                       ->where('student_id',  $student_id)
                        ->delete();
  
            return Redirect::to('/eee');      
  
     }



  

}
