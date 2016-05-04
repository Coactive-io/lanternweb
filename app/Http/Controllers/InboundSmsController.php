<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;

class InboundSmsController extends Controller
{
    public function handle(Request $request){
        return Response::view('twiml')->header('Content-Type', 'text/xml');
    }
}
