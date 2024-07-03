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

    'yookassa' => [
        'shop_id' => env('YOOKASSA_SHOP_ID', null),
        'secret_key' => env('YOOKASSA_SECRET_KEY', null),
    ],

    'telegram' => [
        'bot_token' => env('TELEGRAM_BOT_TOKEN', null),
        'group_id' => env('TELEGRAM_GROUP_ID', null),
        'primary_chat_title' => env('TELEGRAM_PRIMARY_CHAT_TITLE', null),

        'notifications_chat_id' => env('PRIMARY_CHAT_ID_FOR_PAYMENT_NOTIFICATIONS', null),

        'bot_url' => env('TELEGRAM_BOT_LINK', null),
    ],

    'website' => [
        'url' => env('APP_URL', null),
    ],

    // V3 config:
    'google' => [
        'recaptcha' => [
            'site_key' => env('GOOGLE_CAPTCHA_SITE_KEY'),
            'secret_key' => env('GOOGLE_CAPTCHA_SECRET_KEY'),
            'version' => 'v3',
            'score' => 0.5, // An integer between 0 and 1, that indicates the minimum score to pass the Captcha challenge.
        ],
    ],

];
