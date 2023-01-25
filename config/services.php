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
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

'firebase' => [
    'api_key' => 'AIzaSyCtgCJBolnDEgWevMa45G3Q_arWCg1W1x8',
    'auth_domain' => 'pfeprojet-47483.firebaseapp.com',
    'database_url' => 'https://pfeprojet-47483-default-rtdb.firebaseio.com',
    'project_id' => 'pfeprojet-47483',
    'storage_bucket' => 'pfeprojet-47483.appspot.com',
    'messaging_sender_id' => '925070568652',
    'app_id' => '1:925070568652:web:320745d2928a6ffcbea669',
    'measurement_id' => 'G-W5BGXEXSJP',
],

];
