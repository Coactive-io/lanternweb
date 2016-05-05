<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Message;


class InboundSmsController extends Controller
{
    public function handle(Request $request){
        $command = $request->input('Body');
        $from  =$request->input('From');
        $message = Message::where('command','=', $command)->first();
        if(!empty($message)){
            return $this->smsResponse($message->content);
        } else {
            return $this->smsResponse('Sorry, we didn’t get that. Text HELP for a complete list of options.');
        }
    }

    private function smsResponse($message) {
        return response()->view('sms.twiml',['message'=>$message])->header('Content-Type', 'text/xml');
    }
}
