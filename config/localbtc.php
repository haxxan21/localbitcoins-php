<?php

return [

     /*
    |--------------------------------------------------------------------------
    | PUBLIC AUTHENTICATION KEY 
    |--------------------------------------------------------------------------
    |
    | This key is used by the Localbitcoins library to authenticate
    | and perform actions throughout the API.
    |
    */

    "API_AUTH_KEY" => env('API_AUTH_KEY', null),

      /*
    |--------------------------------------------------------------------------
    | PRIVATE AUTHENTICATION KEY 
    |--------------------------------------------------------------------------
    |
    | This key is used by the Localbitcoins library to validate 
    | authentication and perform actions throughout the API.
    |
    */

    "API_AUTH_SECRET" => env('API_AUTH_SECRET', null)
];