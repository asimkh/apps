<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\UserLoginRequest;

class LoginController extends Controller
{
      public function login()
    {
        return view('pages.user.login');
    }

      public function detect(UserLoginRequest $request)
    {

    	
    	 return \Redirect::home()->with('message', 'Logged Successfully!');
    

    }

}
