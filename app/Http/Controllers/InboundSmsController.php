<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;

class InboundSmsController extends Controller
{
    public function handle(Request $request){
        $message = "message!";
        $message = $request->input('body');
        $from  =$request->input('from');
        return $this->smsResponse($message . $from);
    }

    private function smsResponse($message) {
        return response()->view('sms.twiml',['message'=>$message])->header('Content-Type', 'text/xml');
    }
}
