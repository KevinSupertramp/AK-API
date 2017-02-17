<?php

return [

    'default' => 'account',

    'connections' => [

        'account' => [
            'driver'    => env('DB_ACCOUNT_CONNECTION'),
            'host'      => env('DB_ACCOUNT_HOST'),
            'port'      => env('DB_ACCOUNT_PORT'),
            'database'  => env('DB_ACCOUNT_DATABASE'),
            'username'  => env('DB_ACCOUNT_USERNAME'),
            'password'  => env('DB_ACCOUNT_PASSWORD'),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci'
        ],

        'member' => [
            'driver'    => env('DB_MEMBER_CONNECTION'),
            'host'      => env('DB_MEMBER_HOST'),
            'port'      => env('DB_MEMBER_PORT'),
            'database'  => env('DB_MEMBER_DATABASE'),
            'username'  => env('DB_MEMBER_USERNAME'),
            'password'  => env('DB_MEMBER_PASSWORD'),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci'
        ],

        'world' => [
            'driver'    => env('DB_WORLD_CONNECTION'),
            'host'      => env('DB_WORLD_HOST'),
            'port'      => env('DB_WORLD_PORT'),
            'database'  => env('DB_WORLD_DATABASE'),
            'username'  => env('DB_WORLD_USERNAME'),
            'password'  => env('DB_WORLD_PASSWORD'),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci'
        ]

    ]
];