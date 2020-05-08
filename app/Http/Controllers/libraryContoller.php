<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Http\Requests;
use Illuminate\support\facades\Redirect;
use DB;
use Session;

class libraryContoller extends Controller
{
    

    public function add_book(){
        return view('admin.library.add-books');
    }


      // add book 


      public function savebook(Request $req){
        $data=array();
       $data['name']=$req->name;
       $data['author']=$req->author;
       $data['category']=$req->category;
       $data['summary']=$req->summary;
       $data['bookshelf']=$req->bookshelf;
       $image=$req->file('bookcover');
       if($image){

        $book_img=hexdec(uniqid());
        $next=strtolower($image->getClientOriginalExtension());
        $image_full_name=$book_img. '.'.$next;
        $upload_path='public/images/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);
        $data['bookcover']=$image_url;
        DB::table('books_tbl')->insert($data);

       
        Session::put('exception', 'successfully add book');
        // return Redirect()->back()->with($notification);

        return Redirect::to('/addexpense');

      }

      else{


        DB::table('books_tbl')->insert($data);
        $notification=array( 
            'message'=>'successfully add book',
            'alert-type'=>'success'
        );

        return Redirect::to('/addbook');

      }
 

    }


    // show book 
  
    public function show_book(){

          $show_book=DB::table('books_tbl')
                      ->get();


            $show_book_info=view('admin.library.book-show')  
                      ->with('show_all_book',$show_book);
                      
                      return view('layout')
                         ->with('admin.library.book-show', $show_book_info);

        // return view('admin.library.book-show');
    }




    




}
