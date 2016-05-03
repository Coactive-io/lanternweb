<?php
/**
 * Created by PhpStorm.
 * User: georg
 * Date: 5/3/2016
 * Time: 7:19 AM
 */

namespace App\Services;

use Lookups_Services_Twilio;
use Services_Twilio_RestException;


class Helper
{
    public static function PhoneValidator($phone){
        $sid = env('TWILIO_SID');
        $token = env('TWILIO_TOKEN');
        $client = new Lookups_Services_Twilio($sid, $token);
// Make a call to the Lookup API
        $number = $client->phone_numbers->get($phone);

// Print the nationally formatted phone number
        return $number->national_format . "\r\n"; // => (510) 867-5309
    }
}