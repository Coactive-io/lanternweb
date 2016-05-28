<?php

namespace App\Http\Controllers;

use App\History;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Message;
use App\User;
use App\Services\Helper;


class InboundSmsController extends Controller
{
    public function handle(Request $request){
        $command = strtolower($request->input('Body'));
        $from  =$request->input('From');
        $user = User::where('phone','=', $from)->first();
        $history = new History();
        if($command=='start'){
            $user = User::where('phone','=', $from)->first();
            if(empty($user)){
                $cleanPhone = Helper::PhoneValidator($from);
                $user = new User();
                $user->phone = $cleanPhone;
            }
            $user->confirmed_at = date("Y-m-d H:i:s");
            $user->save();
            $user->send('start');
            $history->message_id = 1;
            $history->user_input = $command;
            $history->user_id = $user->id;
            $history->save();
            return null;
        }

        $history->user_input = $command;
        $history->message_id = 0;

        if(!empty($user)){
            $history->user_id = $user->id;
        } else{
            $history->user_id = 0;

        }
        $history->save();


        //First we'll check to see if there's already a message for this command.

        $message = Message::where('command','=', $command)->where('response','=','1')->first();
        if(!empty($message)){
            //If there is a message (that's also specified as a response) than we'll send it.
            return $this->smsResponse($message->content);
        } else {
            //If there's not, we'll check to see if there's some log that applies to the situation before sending back an error.
            return $this->smsResponse("Sorry, we didn’t get that.  Lantern hasn't launched yet but we'll be in touch soon.");
        }
    }

    private function smsResponse($message) {
        return response()->view('sms.twiml',['message'=>$message])->header('Content-Type', 'text/xml');
    }
}
