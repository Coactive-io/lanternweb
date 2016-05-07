<?php
/**
 * Created by PhpStorm.
 * User: georg
 * Date: 5/3/2016
 * Time: 7:19 AM
 */

namespace App\Services;

use Lookups_Services_Twilio;
use Mockery\CountValidator\Exception;
use Services_Twilio_RestException;


class Helper
{
    public static function PhoneValidator($phone)
    {
        $sid = env('TWILIO_SID');
        $token = env('TWILIO_TOKEN');
        $client = new Lookups_Services_Twilio($sid, $token);
        $phone = preg_replace('/\D+/', '', $phone);
// Make a call to the Lookup API
        try {
            $number = $client->phone_numbers->get($phone, array("CountryCode" => "US", "Type" => "carrier"));
            $number->carrier->type;
            return $number->phone_number;
        } catch(\Exception $e){
            return false;
        }
    }

}