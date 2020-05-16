<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();



class AdminController extends Controller
{

  
  public function admin_dashboard(){


    return view('admin.dashboard');

  }
  
    // admin logout

       public function logout(){

          Session::put('name', null);
          Session::put('id', null);
         
        return  Redirect::to('/backend');
       }
   


    //  admin login  

    public function login_dashboard (Request $req){


        $email=$req->email;
        $password=$req->password;
            $result=DB::table('admins')
         ->where('email', $email)
          ->where('password', $password)
          ->first();


          if($result){
        
        
            Session::put('email',$result->email);
            Session::put('id', $result->id);
            return Redirect::to('/admin_dashboard');
               
            
              }
            
            else{
            
                return Redirect::to('/backend');
           }
         
        

       

 }



}

