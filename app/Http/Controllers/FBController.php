<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FBController extends Controller
{
    //
     //
      public function home()
    {
        return view('pages.fb.home');
    }
}
