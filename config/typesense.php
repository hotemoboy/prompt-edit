<?php

return [

    'enabled' => env('TYPESENSE_ENABLED', false),

    'api_key' => env('TYPESENSE_API_KEY'),

    'nodes' => [
        [
            'host' => env('TYPESENSE_HOST', 'localhost'),
            'port' => env('TYPESENSE_PORT', '8108'),
            'protocol' => env('TYPESENSE_PROTOCOL', 'http'),
        ],
    ],

    'connection_timeout_seconds' => env('TYPESENSE_CONNECTION_TIMEOUT', 2),

];
