<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    
    'facebook' => [
        'client_id'     => '1963581900624770',
        'client_secret' => 'd39eeadc3dcc15b9d426a94420f28a29',
        'redirect'      => 'http://localhost:8000/auth/facebook/callback',
    ],


    'google' => [
        'client_id'     => ' 1094651790412-7mjnqjbqdv07agetcensmjl1pgktdauj.apps.googleusercontent.com ',
        'client_secret' => ' rAN3VsoX8-W8wjx7ek43fUeF ',
        'redirect'      => 'http://localhost:8000/auth/google/callback',
    ],

];
