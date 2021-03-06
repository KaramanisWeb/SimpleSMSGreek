<?php

return [
    'driver' => env('SMS_DRIVER', 'mail'),

    'from' => env('SMS_FROM', 'Your Number or Email or Name'),

    'ez4us' => [
        'username' => env('EZ4US_USERNAME', 'Your Ez4us Username'),
        'password' => env('EZ4US_PASSWORD', 'Your Ez4us Password'),
        'unicode' => env('EZ4US_UNICODE', false),
    ],

    'smsn' => [
        'username' => env('SMSN_USERNAME', 'Your Smsn Username'),
        'password' => env('SMSN_PASSWORD', 'Your Smsn Password'),
        'unicode' => env('SMSN_UNICODE', false),
    ],

    'smsnetgr' => [
        'username' => env('SMSNETGR_USERNAME', 'Your Smsnetgr Username'),
        'api_password' => env('SMSNETGR_API_PASS', 'Your Smsnetgr API Password'),
        'api_token' => env('SMSNETGR_API_TOKEN', 'Your Smsnetgr API Token'),
        'unicode' => env('SMSNETGR_UNICODE', false),
    ],

    'callfire' => [
        'app_login'    => env('CALLFIRE_LOGIN', 'Your CallFire API Login'),
        'app_password' => env('CALLFIRE_PASSWORD', 'Your CallFire API Password'),
    ],

    'eztexting' => [
        'username' => env('EZTEXTING_USERNAME', 'Your EZTexting Username'),
        'password' => env('EZTEXTING_PASSWORD', 'Your EZTexting Password'),
    ],

    'flowroute' => [
        'access_key' => env('FLOWROUTE_ACCESS_KEY', 'Your Flowroute Access Key'),
        'secret_key' => env('FLOWROUTE_SECRET_KEY', 'Your Flowroute Secret Key'),
    ],

    'infobip' => [
        'username' => env('INFOBIP_USERNAME', 'Your Infobip Username'),
        'password' => env('INFOBIP_PASSWORD', 'Your Infobip Password'),
    ],

    'labsmobile' => [
        'client_id' => env('LABSMOBILE_CLIENT_ID', 'Your Labsmobile Client ID'),
        'username'  => env('LABSMOBILE_USERNAME', 'Your Labsmobile Username'),
        'password'  => env('LABSMOBILE_PASSWORD', 'Your Labsmobile Password'),
        'test'      => env('LABSMOBILE_TEST', false),
    ],

    'mozeo' => [
        'company_key' => env('MOZEO_COMPANY_KEY', 'Your Mozeo Company Key'),
        'username'    => env('MOZEO_USERNAME', 'Your Mozeo Username'),
        'password'    => env('MOZEO_PASSWORD', 'Your Mozeo Password'),
    ],

    'nexmo' => [
        'api_key'    => env('NEXMO_KEY', 'Your Nexmo API key'),
        'api_secret' => env('NEXMO_SECRET', 'Your Nexmo API secret'),
    ],

    'plivo' => [
        'auth_id'    => env('PLIVO_AUTH_ID', 'Your Plivo Auth ID'),
        'auth_token' => env('PLIVO_AUTH_TOKEN', 'Your Plivo Auth Token'),
    ],

    'twilio' => [
        'account_sid' => env('TWILIO_SID', 'Your Twilio SID'),
        'auth_token'  => env('TWILIO_TOKEN', 'Your Twilio Token'),
        'verify'      => env('TWILIO_VERIFY', true),
    ],

    'zenvia' => [
        'account_key'      => env('ZENVIA_KEY', 'Your Zenvia account key'),
        'passcode'         => env('ZENVIA_PASSCODE', 'Your Zenvia Passcode'),
        'call_back_option' => env('ZENVIA_CALLBACK_OPTION', 'NONE'),
    ],

    'sms77' => [
        'user'    => env('SMS77_LOGIN', 'Your SMS77 API Login Name'),
        'api_key' => env('SMS77_PASSWORD', 'Your SMS77 API Password or Api Key'),
        'debug'   => env('SMS77_DEBUG', '0'),
    ],

    'justsend' => [
        'api_key'    => env('JUSTSEND_KEY', 'Your JustSend API key'),
    ],
];
