<?php

return [

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'buyers',
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'buyers',
        ],

        'admin' => [
            'driver' => 'session',
            'provider' => 'admins',
        ],
        'seller' => [
            'driver' => 'session',
            'provider' => 'sellers',
        ],
    ],

    'providers' => [
        'buyers' => [
            'driver' => 'eloquent',
            'model' => App\Models\buyer::class,
        ],

        'admins' => [
            'driver' => 'eloquent',
            'model' => App\Models\Admin::class,
        ],
        'sellers' => [
            'driver' => 'eloquent',
            'model' => App\Models\Seller::class,
        ],
    ],

    'passwords' => [
        'buyers' => [
            'provider' => 'buyers',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    'password_timeout' => 10800,

];
