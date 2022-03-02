<?php

return [

    'enabled' => env('BOMB_ENABLED'),

    'theards' => 100,

    'timeout' => 1,

    'destinations' => [
        ['url'=> 'https://www.kommersant.ru', 'method'=> 'get'],
    ],
];