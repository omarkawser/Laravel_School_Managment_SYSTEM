<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tutionsController extends Controller
{
    public function tution(){

        return view('admin.tutionfee');

    }
}
