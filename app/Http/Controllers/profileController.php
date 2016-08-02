<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\User;
//use App\Models\User;
use App\Http\Requests;
//use Illuminate\Database\Eloquent\Model;

class ProfileController extends Controller
{
    //
    public function home($firstname)
    {

/*
	try{
		$user = User::with('profile')->where($firstname)->firstOrFail();
		dd($user->toArray());
	}

	catch(ModelNotFoundException $e)
	{
		
		  return \Redirect::home()->with('message', 'User Not Found!');
	}

	*/
    	
    	return view('pages.user.profile');
    }
}
