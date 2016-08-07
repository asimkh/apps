<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;



use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\Eloquent\Model;

use App\Http\Requests;
//use Illuminate\Database\Eloquent\Model;
//use App\SocialAccountService;
use Socialite;
use Illuminate\Foundation\Auth\User as Authenticatable;


class ProfilesController extends Controller
{

    public function home($userDetails)
    {

    
	try{
		//$user = User::wherefirstname($userDetails)->firstOrFail();
		$user = User::with('profile')->wherefirstname($userDetails)->firstOrFail();
		//dd($user->toArray());
	}

	catch(ModelNotFoundException $e)
	{
		
		  return \Redirect::home()->with('message', 'User Not Found!');
	}
	


    	
    	return view('pages.user.profile');
    }
}
