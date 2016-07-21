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

       public function login()
    {
        $login_link = $fb
            ->getRedirectLoginHelper()
            ->getLoginUrl('https://localhost.com:8000/facebook/callback', ['email', 'user_events']);

    	echo '<a href="' . $login_link . '">Log in with Facebook</a>';
    }



    
}
