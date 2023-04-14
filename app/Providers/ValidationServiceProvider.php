<?php

namespace App\Providers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class ValidationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Validator::extend('cz_latin_integer', function($attributes, $value){
            return preg_match('/^[a-zA-Za-žA-Ž0-9 ]+$/u', $value);
        }, 'The field must contain only Latin or Czech characters and numbers');

        Validator::extend('cz_latin', function($attributes, $value){
            return preg_match('/^[a-zA-Za-žA-Ž ]+$/u', $value);
        }, 'The field must contain only Latin or Czech characters');
        
        Validator::extend('cz_latin_marks', function($attributes, $value){
            return preg_match('/^[a-zA-Za-žA-Ž0-9\p{P} ]*$/u', $value);
        }, 'The field must contain only Latin or Czech characters, numbers and punctuation marks');

        Validator::extend('phone', function($attributes, $value){
            return preg_match('/^[0-9 +]*$/u', $value);
        }, 'The field must contain only numbers and +');
    }
}
