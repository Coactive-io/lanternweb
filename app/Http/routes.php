<?php
Use App\User;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('phone',function(){

    return view('phone');
});

Route::resource('user', 'UserController');
Route::resource('place', 'PlaceController');

Route::get('business',function(){
    return view('business');
});