<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Http\Requests;
use Illuminate\support\facades\Redirect;
  //use Illuminate\Validation\Validator;


use DB;
use Session;
use Validator;
session_start();




class AddstudentsController extends Controller
{
    public function addstudent(){

        return view('admin.Addstudent');
    }

    public function savestudent(Request $request){

        $request->validate([

           'student_name' => 'required',
           'student_roll' => 'required|unique:students_tbl|max:255',
           'student_fathername' => 'required',
           'student_mothername' => 'required',
           'student_email' => 'required|unique:students_tbl|max:255',
            'student_address' => 'required',
           'student_password' => 'required',
           'student_department' => 'required',
           'student_admission_year' => 'required',
           'student_image' => 'mimes:jpeg,jpg,png,gif|required|max:10000',



   
]);
      $data= array();


      $data['student_name']=$request->student_name;
      $data['student_roll']=$request->student_roll;
      $data['student_fathername']=$request->student_fathername;
      $data['student_mothername']=$request->student_mothername;
      $data['student_email']=$request->student_email ;
      $data['student_address']=$request->student_address ;
      $data['student_password']=md5($request->student_password);
      $data['student_department']=$request->student_department ;
      $data['student_admission_year']=$request->student_admission_year ;


      $image=$request->file('student_image');

      if($image){

           $student_img=hexdec(uniqid());
           $next=strtolower($image->getClientOriginalExtension());
           $image_full_name=$student_img. '.'.$next;
           $upload_path='public/images/';
           $image_url=$upload_path.$image_full_name;
           $success=$image->move($upload_path,$image_full_name);
           $data['student_image']=$image_url;
           DB::table('students_tbl')->insert($data);

        //    $notification=array( 
        //     'message'=>'successfully add student',
        //     'alert-type'=>'success'
        // );

        Session::put('exception', 'successfully add student');


        // return Redirect()->back()->with($notification);

        return Redirect::to('/addstudent');


      }


      else{


        DB::table('students_tbl')->insert($data);
        $notification=array( 
            'message'=>'successfully add student',
            'alert-type'=>'success'
        );

        return Redirect::to('/addstudent');

      }
 




    }


}

