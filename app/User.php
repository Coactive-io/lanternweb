<?php

namespace App;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Twilio;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function pulse($deal){

    }
    public function send($messageName, $userInput = null)
    {
        $message = Message::where("command", "=", $messageName)->first();
        if(!empty($message)){
            Twilio::message($this->phone, $message->content);
            $log = new History();
            $log->user_id = $this->id;
            $log->message_id = $message->id;
            $log->user_input = $userInput;
            $log->save();
        }else{
            return false;
        }
    }

}
