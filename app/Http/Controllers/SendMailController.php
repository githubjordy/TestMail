<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Mail\ContactMe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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

        $header = array();
        //$header[] = 'Content-length: 0';
        //$header[] = 'Content-type: application/json';
        //$header[] = 'bearer dfsdfjdslkfjdslfdjflkdsf';
        $authorization = "Authorization: Bearer 080042cad6356ad5dc0a720c18b53b8e53d4c274";

        //curl_setopt($crl, CURLOPT_HTTPHEADER,array('Content-Type: application/json' , $authorization ));

        return view('SendMail.index');
     }

    public function store(Request $request)
    {

        dd($request);
        Log::info("called");
        Log::info(request()->headers->get('referer'));
        dd("diw");

        $data = [];
        $requestdata = $request->except('_token');
        $referer = request()->getHost();
        $testtt = "teset";
        Log::info($testtt);
        echo"test";
        dd($request);
        foreach($requestdata as $x => $val){
        echo($x);
        
        if(strtolower($x) ==="email"||strtolower($x)==="e-mail"||strtolower($x)=== "e_mail"){
            echo("called");
            $data[$x]= 'required|email';
        }

        else{
        $data[$x] = 'required';}
        
        }

        //dd($data);
        //$filterdata = $data->except('_token');

        $request->validate($data);
        dd($request);
        //$request->validate(['email'=> 'required|email']);      
       // Mail::to($request->input('email'))
        //->send(new Contact());

        dd($request);

        return redirect('/SendMail.index')->with('message','email sent!');

    }





}
