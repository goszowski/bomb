<?php

return [

    'enabled' => env('BOMB_ENABLED'),

    'theards' => 100,

    'timeout' => 5,

    'destinations' => [
        ['url'=> '213.24.76.25:1935', 'method'=> 'post'],
        ['url'=> '213.24.76.25:8080', 'method'=> 'post'],
        ['url'=> '195.218.193.189:5060', 'method'=> 'post'],
        ['url'=> '95.173.148.51:5060', 'method'=> 'post'],
        ['url'=> '95.173.148.51:554', 'method'=> 'post'],
        ['url'=> '109.252.233.150:51', 'method'=> 'post'],
    ],
];