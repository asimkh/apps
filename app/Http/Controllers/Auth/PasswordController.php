<?php

namespace App\Http\Controllers\Auth;

use Mail;
use Illuminate\Mail\Message;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ResetsPasswords;

use Password;
use Auth;



class PasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

   

    /**
     * Create a new password controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
        $this->middleware($this->guestMiddleware());
    }




    public function sendResetLinkEmail(Request $request)
    {
    
    $this->validate($request, ['email' => 'required|email']);

       $response = Password::sendResetLink($request->only('email'), function (Message $message) {
           $message->subject('Your Account Password');

       });

       switch ($response) {
           case Password::RESET_LINK_SENT:
               return redirect()->back()->with('status', trans($response));

           case Password::INVALID_USER:
               return redirect()->back()->withErrors(['email' => trans($response)]);
       }
    }



    
   

}
