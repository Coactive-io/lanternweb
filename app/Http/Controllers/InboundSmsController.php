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

        //First we'll check to see if there's already a message for this command.
        $message = Message::where('command','=', $command)->where('response','=','1')->first();
        if(!empty($message)){
            //If there is a message (that's also specified as a response) than we'll send it.
            return $this->smsResponse($message->content);
        } else {
            //If there's not, we'll check to see if there's some log that applies to the situation before sending back an error.
            return $this->smsResponse('Sorry, we didn’t get that. Text HELP for a complete list of options.');
        }
    }

    private function smsResponse($message) {
        return response()->view('sms.twiml',['message'=>$message])->header('Content-Type', 'text/xml');
    }
}
