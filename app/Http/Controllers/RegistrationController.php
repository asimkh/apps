<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\User;
use Illuminate\Support\Facades\Input;

use Forms\RegistrationForm;

use App\Http\Requests\UserRegisterRequest;

class RegistrationController extends Controller
{

/*
|--------------------------------------------------------------------------
| Registration
|--------------------------------------------------------------------------
|

*/

private $registrationForm;



     function _construct(  RegistrationForm $registrationForm)
    {
    	$this->registrationForm = $registrationForm;
    }



     public function signup()
    {
    	return view('pages.user.signup');
    }




    /*
|--------------------------------------------------------------------------
| New User
|--------------------------------------------------------------------------
|

*/


     public function store(UserRegisterRequest $request)
    {

       
       // $this->registrationForm->validate(Input::all());
    
    	//return 'creating a new user';
    	User::create(

    		Input::only('username','email','password')

    		);
    		

    	//return \Redirect::home();
         return \Redirect::home()->with('message', 'Successfully registered!');
    	// return redirect('/');

    }
    	


}
