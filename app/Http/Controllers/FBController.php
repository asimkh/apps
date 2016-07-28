<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers;
use SammyK\LaravelFacebookSdk\LaravelFacebookSdk;
use App\Http\Controllers\Controller;

class FBController extends Controller
{
    
    public function home()
    {
        return view('pages.fb.home');
    }

    public function login (LaravelFacebookSdk $fb)
    {
    
    $fb->getLoginUrl(['email']);
    return view('facebook.callback')->with('message', 'Facebook logging....');
   
    

    }

    


    
}

