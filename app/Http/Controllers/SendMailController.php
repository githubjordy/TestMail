<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        dd($request);

        return view('SendMail.index');

    }





}
