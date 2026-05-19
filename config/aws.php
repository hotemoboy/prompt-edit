<?php

return [

    'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),

    'credentials' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
    ],

    's3' => [
        'bucket' => env('AWS_BUCKET'),
        'url' => env('AWS_URL'),
        'endpoint' => env('AWS_ENDPOINT'),
        'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
    ],

    'cloudfront' => [
        'url' => env('AWS_CLOUDFRONT_URL'),
    ],

];
