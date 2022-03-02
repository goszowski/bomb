<?php

return [

    'enabled' => env('BOMB_ENABLED'),

    'theards' => 10000,

    'timeout' => 1,

    'destinations' => [
        ['url'=> 'https://www.kommersant.ru', 'method'=> 'get'],
    ],
];