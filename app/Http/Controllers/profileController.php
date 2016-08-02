<?php

namespace App\Http\Controllers;

use App\Models\User;
//use App\User;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\Eloquent\Model;
//use App\Models\User;
use App\Http\Requests;
//use Illuminate\Database\Eloquent\Model;




class ProfileController extends Controller
{
    //
    public function home($firstname)
    {


	try{
		$user = User::wherefirstname($firstname)->firstOrFail();
		//dd($user->Profile->toArray());
	}

	catch(ModelNotFoundException $e)
	{
		
		  return \Redirect::home()->with('message', 'User Not Found!');
	}


    	
    	return view('pages.user.profile');
    }
}
