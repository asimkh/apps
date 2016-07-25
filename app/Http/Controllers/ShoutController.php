<?php

namespace App\Http\Controllers;

use Mail;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ShoutFormRequest;


class ShoutController extends Controller
{
    //
      public function giveShout()
    {
    	return view('pages.contact.shout');
    }

      public function sendmail(ShoutFormRequest $request)
    {
       //dd(app::get('mail'));
       
        $data = array(
            'name' => $request->get('contactName'),
            'email' => $request->get('contactEmail'),
            'phone' => $request->get('contactPhone'),
            'user_message' => $request->get('contactMessage')
        );



    	Mail::send('pages.contact.mail',
            $data , function($message)use($request)
    {
    
    $message->from('postmaster@hazzir.com', 'Hazzir - Contact Form');
    $message->to('hazzir.mail@gmail.com', 'Admin Hazzir');
    $message->subject('Hazzir Feedback ~');
    });

   
   //return "Send Mail Successfully!";
   
    	 return Redirect::home()->with('message', 'Thanks for contacting us!');
         

    }


    public function Testmail()
    {

        $data = array(
            'name' => 'mail',
            'email' => 'your@mail.com',
            'user_message' => 'Hey There'
        );
        Mail::send('pages.contact.mail',
         $data,
    function($message) 
        
    {
    
    $message ->from('hazzir.mail@gmail.com', 'Hazzir Mail');
    $message ->to('hazzir.mail@gmail.com', 'Test User')->subject('Feedback Hazzir ~ Test Mail');

    
    });

        return "Send Mail Successfully!";
    }
}
