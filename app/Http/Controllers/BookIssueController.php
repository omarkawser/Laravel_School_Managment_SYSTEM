<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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


}
