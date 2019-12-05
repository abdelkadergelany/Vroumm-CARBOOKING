<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'facebook' => [
    'client_id' => '2186379824989584',
    'client_secret' => 'e1760487c9742d34bae09c713d2c8704',
    'redirect' => 'http://localhost:8000/login/facebook/callback',
],

  'google' => [
    'client_id' => '949347289746-pp5q2m5qve0re69q6tmarnhba10396hp.apps.googleusercontent.com',
    'client_secret' => 'NDZP5jkOSyLwWKuFIZjwm3ED',
    'redirect' => 'http://localhost:8000/login/google/callback',
],
'nexmo' => [
    'key' => '8fb001b7',
    'secret' => 'tIykefKfD4kDuE5D',
    'sms_from' => 'vroumm',
],

];
