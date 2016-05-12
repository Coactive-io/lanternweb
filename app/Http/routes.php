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
Route::get('login', function () {
    return view('login');
});
Route::post('sms', array('uses' => 'InboundSmsController@handle'));
Route::get('phone',function(){
    return view('phone');
});

Route::get('auth/github', 'Auth\AuthController@redirectToProvider');
Route::get('auth/github/callback', 'Auth\AuthController@handleProviderCallback');

Route::resource('user', 'UserController');
Route::resource('place', 'PlaceController');
Route::resource('message', 'MessageController');
Route::resource('vendor', 'VendorController');



Route::get('business',function(){
    return view('vendor.create');
});