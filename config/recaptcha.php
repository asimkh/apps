<?php

return [

    /*
    |--------------------------------------------------------------------------
    | API Keys
    |--------------------------------------------------------------------------
    |
    | Set the public and private API keys as provided by reCAPTCHA.
    |
    | In version 2 of reCAPTCHA, public_key is the Site key,
    | and private_key is the Secret key.
    |

    Site Key = 6LeoRSUTAAAAAAXkrdWdzIgv163agaEeC7jgaNEf
    Secret Key = 6LeoRSUTAAAAAJdWs_xAhTni24bdtNSUh-5Te44E
    */
    'public_key'     => env('RECAPTCHA_PUBLIC_KEY', '6LeoRSUTAAAAAAXkrdWdzIgv163agaEeC7jgaNEf'),
    'private_key'    => env('RECAPTCHA_PRIVATE_KEY', '6LeoRSUTAAAAAJdWs_xAhTni24bdtNSUh-5Te44E'),

    /*
    |--------------------------------------------------------------------------
    | Template
    |--------------------------------------------------------------------------
    |
    | Set a template to use if you don't want to use the standard one.
    |
    */
    'template'    => '',

    /*
    |--------------------------------------------------------------------------
    | Driver
    |--------------------------------------------------------------------------
    |
    | Determine how to call out to get response; values are 'curl' or 'native'.
    | Only applies to v2.
    |
    */
    'driver'      => 'curl',

    /*
    |--------------------------------------------------------------------------
    | Options
    |--------------------------------------------------------------------------
    |
    | Various options for the driver
    |
    */
    'options'     => [

        'curl_timeout' => 1,

    ],

    /*
    |--------------------------------------------------------------------------
    | Version
    |--------------------------------------------------------------------------
    |
    | Set which version of ReCaptcha to use.
    |
    */

    'version'     => 2,

];
