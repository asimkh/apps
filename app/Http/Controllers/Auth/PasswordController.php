<?php

namespace App\Http\Controllers\Auth;

use Mail;
use Illuminate\Mail\Message;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Auth\Passwords\PasswordBroker;
use Password;
use Auth;
use Illuminate\Contracts\Auth\Guard;




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
    public function __construct(Guard $auth, PasswordBroker $passwords)
    {
       $this->auth = $auth;
        $this->passwords = $passwords;
        $this->middleware($this->guestMiddleware());
    }

    public function emailResetLink(CanResetPasswordContract $user, $token, Closure $callback = null)
    {
        // We will use the reminder view that was given to the broker to display the
        // password reminder e-mail. We'll pass a "token" variable into the views
        // so that it may be displayed for an user to click for password reset.
        $view = $this->emailView;

        return $this->mailer->send($view, compact('token', 'user'), function ($m) use ($user, $token, $callback) {
            $m->to($user->getEmailForPasswordReset());

            if (!is_null($callback)) {
                call_user_func($callback, $m, $user, $token);
            }
        });
    }




    public function sendResetLinkEmail(Request $request)
    {

      
    
    $this->validate($request, ['email' => 'required|email']);

      /*$response = Password::sendResetLink($request->only('email'), function (Message $message) {
           $message->subject('Your Account Password');
       });*/
 

 /*
        $data = array(
        
            'email' => $request->get('email')
        
        );

      

 $response = Mail::send('auth.emails.password',$data, function (Message $message) {
           $message->subject('Your Account Password');

       });*/




    $response = $this->passwords->sendResetLink($request->only('email'), function($message)
    {
        $message->subject('Password Reminder');
    });

       
       switch ($response) {
        /*
           case Password::RESET_LINK_SENT:
               return redirect()->back()->with('status', trans($response));

           case Password::INVALID_USER:
               return redirect()->back()->withErrors(['email' => trans($response)]);
               */

            case PasswordBroker::RESET_LINK_SENT:
            return redirect()->back()->with('status', trans($response));

           case PasswordBroker::INVALID_USER:
            return redirect()->back()->withErrors(['email' => trans($response)]);
       }
    }



    
   

}
