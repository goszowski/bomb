<?php

return [

    'enabled' => env('BOMB_ENABLED'),

    'theards' => 1000,

    'timeout' => 3,

    'destinations' => [
        ['url'=> 'ns1.ddos-guard.net', 'method'=> 'get'],
        ['url'=> 'ns2.ddos-guard.net', 'method'=> 'get'],
        ['url'=> 'ns3.ddos-guard.net', 'method'=> 'get'],
        ['url'=> 'ns4.ddos-guard.net', 'method'=> 'get'],
        ['url'=> 'ns5.ddos-guard.net', 'method'=> 'get'],
        ['url'=> 'ns6.ddos-guard.net', 'method'=> 'get'],
    ],
];