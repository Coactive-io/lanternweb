<?php

namespace App\Providers;

use App\Services\Helper;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('phone', function($attribute, $value, $parameters, $validator) {
            //Some conditional to evaluate...
            if(!Helper::PhoneValidator($value)){
                return false;
            }else{
                return true;
            }
        });


    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
