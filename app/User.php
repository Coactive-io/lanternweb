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
        'name', 'email', 'password', 'github_id', 'avatar'
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
            return true;
        }else{
            return false;
        }
    }
    public static function spotsAvailable()
    {
        $capacity = env('CAPACITY_LIMIT');
        // TODO: update count to only count confirmed users
        // $count = self::whereConfirmed('1')->count();
        $count = self::count();
        $percent_left = round(($capacity - $count) / $capacity * 100);

        if($percent_left > 30){
            return 30;
        }

        return $percent_left;
    }


}
