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

    'cloud_payments' => [
        'public_id'               => env('CLOUD_PAYMENTS_PUBLIC_ID', null),
        'api_key'                 => env('CLOUD_PAYMENTS_API_KEY', null),
        'term_url'                => env('CLOUD_PAYMENTS_PAYMENT_TERM_URL', null),
        'payment_currency'        => env('CLOUD_PAYMENTS_PAYMENT_CURRENCY', null),
        'payment_url'             => env('CLOUD_PAYMENTS_PAYMENT_URL', null),
        'payment_description'     => env('CLOUD_PAYMENTS_PAYMENT_DESCRIPTION', null),
        'payment_language'        => env('CLOUD_PAYMENTS_PAYMENT_LANGUAGE', null),
        'payment_amount'          => env('CLOUD_PAYMENTS_PAYMENT_AMOUNT', null),
        'payment_is_recurring'    => env('CLOUD_PAYMENTS_PAYMENT_IS_RECURRING', null),
    ],

    'telegram' => [
        'bot_token' => env('TELEGRAM_BOT_TOKEN', null),
        'group_id' => env('TELEGRAM_GROUP_ID', null),
        'primary_chat_title' => env('TELEGRAM_PRIMARY_CHAT_TITLE', null),
        'notifications_chat_id' => env('PRIMARY_CHAT_ID_FOR_PAYMENT_NOTIFICATIONS', null),
        'bot_url' => env('TELEGRAM_BOT_LINK', null),

        // OAuth
        'bot' => env('TELEGRAM_BOT_NAME'),
        'client_id' => null,
        'client_secret' => env('TELEGRAM_BOT_TOKEN'),
        'redirect' => env('TELEGRAM_REDIRECT_URI'),
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
        // OAuth
        'client_id' => env('GOOGLE_CLIENT_ID'),
        'client_secret' => env('GOOGLE_CLIENT_SECRET'),
        'redirect' => env('GOOGLE_REDIRECT_URI'),
    ],

];
