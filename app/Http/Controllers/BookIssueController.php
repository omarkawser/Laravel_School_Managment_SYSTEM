<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;

class BookIssueController extends Controller
{
      // issue book
   public function issuebook(){

      return view('admin.library.issue-books');

   }

         // issued book
   public function  issuedbook(){

    return view('admin.library.issued-books');

 }

            // return book
 public function   returnbook(){

    return view('admin.library.return-books');

 }


    //delete 
 public function delete_book($id){

    
   DB::table('books_tbl')
                ->where('id',  $id)
                 ->delete();

     return Redirect::to('/showbook');      

}



}
