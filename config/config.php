<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cache Time
    |--------------------------------------------------------------------------
    |
    | Cache time for get data pax
    |
    | - set zero for remove cache
    | - set null for forever
    |
    | - unit: minutes
    */

    "cache_time" => env("PAX_CACHE_TIME", 0),

    /*
    |--------------------------------------------------------------------------
    | Default Panel Name
    |--------------------------------------------------------------------------
    |
    | Here you can specify which of the panel name you want
    |
    */

    'panel_name' => env('PAX_PANEL_NAME', 'Pax'),

];
