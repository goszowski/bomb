<?php

return [

    'enabled' => env('BOMB_ENABLED'),

    'theards' => 100,

    'timeout' => 5,

    'destinations' => [
        ['url'=> 'https://scr.online.sberbank.ru/api/fl/idgib-w-3ds', 'method'=> 'get'],
        ['url'=> 'https://3dsec.sberbank.ru/mportal3/auth/login', 'method'=> 'get'],
        ['url'=> 'https://acs1.sbrf.ru', 'method'=> 'get'],
        ['url'=> 'https://acs2.sbrf.ru', 'method'=> 'get'],
        ['url'=> 'https://acs3.sbrf.ru', 'method'=> 'get'],
        ['url'=> 'https://acs4.sbrf.ru', 'method'=> 'get'],
        ['url'=> 'https://acs5.sbrf.ru', 'method'=> 'get'],
        ['url'=> 'https://acs6.sbrf.ru', 'method'=> 'get'],
        ['url'=> 'https://acs7.sbrf.ru', 'method'=> 'get'],
        ['url'=> 'https://acs8.sbrf.ru', 'method'=> 'get'],
    ],
];