<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\support\facades\Redirect;



class ExpenseController extends Controller
{    

    // add expanse 
    public function add_expense(){

        return view('admin.Accountant.add-expenses');
    }




       // show expanse 
       public function show_expense(){

        return view('admin.Accountant.show-expenses');
    }
 


        // edit   expanse 
        public function edit_expense(){

            return view('admin.Accountant.edit-expenses');
        }
     

            // save expenses

        public function save_expense(Request $req){

            $data=array();


            $data['title']=$req->title;
            $data['name']=$req->name;
            $data['value']=$req->value;
            $data['type']=$req->type;
          
           DB::table('expenses_tbl')
                ->insert($data);


                return Redirect::to('/addexpense');  
          


        }
     

         public function dashboard(){

             $dashboard=DB::table('expenses_tbl')->get();


             $dashboard_info=view('admin.Accountant.accountantdashboard')
                  ->with('expenses',  $dashboard);

                  return view('layout')
                        ->with('accountdashboard', $dashboard_info);
                   
  

         }


   // delete expense 


    public function deleteexpene($id){

       DB::table('expenses_tbl')
           ->where('id', $id)
           ->delete();

           return Redirect::to('/accountdashboard'); 
    

    }



}
