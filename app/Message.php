<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Aloha\Twilio\Twilio as Twilio;

class Message extends Model
{
    public static function send($message_name)
    {
        $message = Message::where("test", "=", $message_name)->first();
        if(!$message->empty()){
            Twilio::message($message->content);
        }
    }

}
