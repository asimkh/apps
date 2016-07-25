<?php

namespace App\Http\Controllers;

use Mail;
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


       
        $data = array(
            'OrganziationSupport' => ('Asim Khan'),
            'OrganziationName' => ('Hazzir'),
            'OrganziationWebsite' => ('http://www.hazzir.com'),
            'name' => $request->get('username'),
            'email' => $request->get('email')
          );

        

        Mail::send('pages.user.signupmail',
            $data , function($message)use($request)
    {
    
    $subject ='Thank you for SignUp at Hazzir!';
    $message->from('postmaster@hazzir.com', 'Hazzir - Contact Form');
    $message->bcc('hazzir.mail@gmail.com', 'Admin Hazzir');
    $message->to($request->get('contactEmail'), $request->get('contactName'));
    $message->subject($subject);
    });

    		

    	//return \Redirect::home();
         return \Redirect::home()->with('message', 'Successfully registered!');
    	// return redirect('/');

    }
    	


}
