<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;

class MBAController extends Controller
{
    public function MBA(){
    
         $mbastudent_info=DB::table('students_tbl')
                ->where(['student_department'=> 'MBA'])
                ->get();


                $mbastudent=view('admin.Course.mba')
                ->with('mba_student_info', $mbastudent_info);


                return view('layout')
                ->with('eee', $mbastudent);
                


          
        return view('admin.Course.mba');
        
 
     }
      
     public function delete_mba($student_id){

    
          DB::table('students_tbl')
                       ->where('student_id',  $student_id)
                        ->delete();
  
            return Redirect::to('/mba');      
  
     }
  




}
