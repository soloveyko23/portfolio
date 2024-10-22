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

  'captcha' => [
    'secret' => '6LfTdqYaAAAAAFUhIZq7rac-iaNkSwCu_V8z-L2d'
  ],
  'telegram' => [
    'bot_api_key' => '795273971:AAHsnAYAWeylwGlykCVIkkFHw6SvHdHERfQ',
    'api_url' => 'https://api.telegram.org/bot',
    'api_check_url' => 'http://api-telegram.mobios.work/telegram/send',
    'secret_key' => 'secretkeynevvi',
    'chat_ids' => [317872317, 184510034, 470329065, 235001421]
  ]
];
