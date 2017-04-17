<?php

namespace App\Http\Controllers\ContactUs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;
use Session;

use App\Http\Requests\ContactFormRequest;


class ContactUsController extends Controller
{


    public function create()
    {
        return view('about.contact');
    }



    public function store(ContactFormRequest $request)
    {

      $this->validate(
              $request,
              [
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'message' => 'required',
              ]
      );

      \Mail::send('emails.contact',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'user_message' => $request->get('message')
        ), function($message)
    {
        $message->from('wj@wjgilmore.com');
        $message->to('wj@wjgilmoret.com', 'Admin')->subject('TODOParrot Feedback');
    });

      Session::flash('message', 'Thanks for contacting us!');
      return redirect('/');
    }




}
