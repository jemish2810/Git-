<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Mail\SendMail;

class MailController extends Controller
{
    function index(){
        return view('mail');
    }

    function send(Request $request)
    {
        $to = $request['email'];
        $this->validate($request, [
            'name'     =>  'required',
            'email'  =>  'required|email',
            'message' =>  'required'
        ]);

        $data = array(
            'name'      =>  $request->name,
            'message'   =>   $request->message
        );

        Mail::to($to)->send(new SendMail($data));
        return back()->with('success', 'Thanks for contacting us!');
    }

}