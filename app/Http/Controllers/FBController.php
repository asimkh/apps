<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers;
use SammyK\LaravelFacebookSdk\LaravelFacebookSdk;

class FBController extends Controller
{
    
    public function home()
    {
        return view('pages.fb.home');
    }

    public function login (LaravelFacebookSdk $fb)
    {

    $login_url = $fb->getLoginUrl(['email']);
    echo '<a href="' . $login_url . '">Login with Facebook</a>';

    }

     public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callback()
    {
        // when facebook call us a with token
    }



    
}

