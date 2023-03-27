<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Mail\ContactMe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    //
    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

     public function index(){


        return view('SendMail.index');
     }

    public function store(Request $request)
    {


        $request->validate(['email'=> 'required|email']);      
        Mail::to($request->input('email'))
        ->send(new Contact());

        dd($request);

        return redirect('/SendMail.index')->with('message','email sent!');

    }





}
