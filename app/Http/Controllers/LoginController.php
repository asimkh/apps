<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\UserLoginRequest;
use SammyK\LaravelFacebookSdk\LaravelFacebookSdk;

class LoginController extends Controller
{
      public function login()
    {
    	 $fb->getLoginUrl(['email']);
        return view('pages.user.login');
    }

      public function detect(UserLoginRequest $request)
    {

    	
    	 return \Redirect::home()->with('message', 'Logged Successfully!');
    

    }

}
