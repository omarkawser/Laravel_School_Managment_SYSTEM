<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
session_start();



class ViewProfileController extends Controller
{
    public function view(){

         
        $admin_id=Session::get('id');
        $admin_profile=DB::table('admins')
                   ->select('*')
                   ->where('id',$admin_id)
                   ->first();;

        return view('admin.view_profile', compact('admin_profile'));

 
     }



}
