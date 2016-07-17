<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\ShoutFormRequest;

class ShoutController extends Controller
{
    //
      public function giveShout()
    {
    	return view('pages.contact.shout');
    }

      public function store(ShoutFormRequest $request)
    {

/*
    	\Mail::send('pages.contact.sendmail',
        array(
            'name' => $request->get('contactName'),
            'email' => $request->get('contactEmail'),
            'user_message' => $request->get('contactMessage')
        ), function($message)
    {
        $message->from('hazzir.mail@gmail.com');
        $message->to('hellohazzir@wgmail.com', 'Admin')->subject('Hazzir Feedback');
    });
    */
    
    	 return \Redirect::home()->with('message', 'Thanks for contacting us!');

    }
}
