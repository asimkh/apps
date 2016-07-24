<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use SammyK\LaravelFacebookSdk\LaravelFacebookSdk;

class FBController extends Controller
{
    //
     //
      public function home()
    {
        return view('pages.fb.home');
    }

       public function login ($fb)
    {
        $login_url = $fb->getLoginUrl(['email']);
    }



    
}

