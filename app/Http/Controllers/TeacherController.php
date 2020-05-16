<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Http\Requests;
use Illuminate\support\facades\Redirect;


use DB;
use Validator;
use Session;
session_start();


class TeacherController extends Controller
{       

  public function  deleteTeacher($id){

      DB::table('teachers_tbl')
          ->where('teacher_id', $id)
           ->delete();




    return Redirect::to('/allteacher');


  }



    public function allTeacher(){


        // show all teacher

          
        
        $allteacher_info=DB::table('teachers_tbl')
        ->get();

          $manage_teacher=view('admin.Allteacher')
        ->with('all_teacher_info',$allteacher_info);

        return view('layout')
                ->with('Allteacher', $manage_teacher);


        // return view('admin.AllTeacher');
        
 
     }


       // add teacher

       public function addTeacher(){

           return view('admin.add_teachers');

       }


      /// save teacher 

     public function saveteacher(Request $req){

                  

                          $req->validate([

           'teacher_name' => 'required',
           'teacher_phone' => 'required',
           'teacher_address' => 'required',
            'teacher_phone' => 'required',
           'teacher_department' => 'required',
           'teacher_image' => 'mimes:jpeg,jpg,png,gif|required|max:10000',



   
]);



     $data=array();
     $data['teacher_name']=$req->teacher_name;
     $data['teacher_phone']=$req->teacher_phone;
     $data['teacher_address']=$req->teacher_address;
     $data['teacher_department']=$req->teacher_department;


   
     $image=$req->file('teacher_image');

     if($image){

          $teacher_img=hexdec(uniqid());
          $next=strtolower($image->getClientOriginalExtension());
          $image_full_name=$teacher_img. '.'.$next;
          $upload_path='public/images/';
          $image_url=$upload_path.$image_full_name;
          $success=$image->move($upload_path,$image_full_name);
          $data['teacher_image']=$image_url;
          DB::table('Teachers_tbl')->insert($data);

       //    $notification=array( 
       //     'message'=>'successfully add teacher',
       //     'alert-type'=>'success'
       // );

       Session::put('exception', 'successfully add Teacher');


       // return Redirect()->back()->with($notification);

       return Redirect::to('/addteacher');


     }


     else{


       DB::table('Teachers_tbl')->insert($data);
       $notification=array( 
           'message'=>'successfully add Teacher',
           'alert-type'=>'success'
       );

       return Redirect::to('/addteacher');

     }

   }

  // teacher view are here 
 public function viewteacher($teacher_id){

    
  $teacher_info_view=DB::table('Teachers_tbl')
                  ->select('*')
                ->where('teacher_id', $teacher_id)
                ->first();


        // $manage_teacher_view=view('admin.teachers_view')
        //      ->with('stu_info_view', $teacher_info_view);

        //         return view('layout')
        //          ->with('admin.teachers_view',$manage_teacher_view);



        return view('admin.view_teacher', compact('teacher_info_view'));




}



 // teacher edit are here 
 public function editteacher($teacher_id){

    
  $up_teacher=DB::table('Teachers_tbl')
                  ->select('*')
                ->where('teacher_id', $teacher_id)
                ->first();


        // $manage_teacher_view=view('admin.teacher_edit')
        //      ->with('stu_info_view', $teacher_info_view);

        //         return view('layout')
        //          ->with('admin.teacher_edit',$manage_teacher_view);



          return view('admin.edit_teacher', compact('up_teacher'));




}



//update teacher part are here 


public function updateteacher(Request $req, $teacher_id){

   
 $data=array();

 $data['teacher_name']=$req->teacher_name ;
 $data['teacher_phone']=$req->teacher_phone ;
 $data['teacher_address']=$req->teacher_address ;
 $data['teacher_department']=$req->teacher_department ;



        DB::table('teachers_tbl')
           ->where('teacher_id', $teacher_id)
           ->update($data);
           
           
           Session::put('exception', 'teacher update successfully');
           return Redirect::to('/allteacher');

    




}












}
