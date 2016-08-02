<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    //

    public function home()
    {
    	return view('pages.home');
    }

     public function about()
    {
    	return view('pages.about.about');
    }

   
     public function privacy()
    {
    	return view('pages.about.privacy');
    }

     public function terms()
    {
        return view('pages.about.terms');
    }

     public function admin()
    {
        return view('pages.admin.home');
    }

     public function profile()
    {
        return view('pages.user.profile');
    }
    
}
