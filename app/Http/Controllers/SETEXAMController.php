<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Http\Requests;
use Illuminate\support\facades\Redirect;
use DB;


class SETEXAMController extends Controller
{
    public function setexam(){

        return view('admin.Exam.setexam');
    }


    // public function viewexam(){

    //     return view('admin.Exam.view_exam');
    // }



    public function addexam(Request $request){

      $data=array();

      $data['exam_name']=$request->exam_name;
      $data['exam_type']=$request->exam_type;
      $data['exam_session']=$request->exam_session;
      $data['exam_subject']=$request->exam_subject;
      $data['exam_section']=$request->exam_section;
      $data['exam_date']=$request->exam_date;
       
     DB::table('setexamtbl')->insert($data);
     
    
    return Redirect::to('/set_exam');
    //     // return view('admin.Exam.view_exam');
    }




   // view exam    

       public function viewexam(){

        $view_exam=DB::table('setexamtbl')
        ->get();

        $manage_exam=view('admin.Exam.view_exam')
                  ->with('exam_view_info',$view_exam );


                  return view('layout')
                  ->with('admin.Exam.view_exam',$manage_exam);

       }


          // delete exam

          public  function deleteexam($id){

           DB::table('setexamtbl')
             ->where('exam_id',$id)
             ->delete();

             return Redirect::to('/view_exam');

          }



}
