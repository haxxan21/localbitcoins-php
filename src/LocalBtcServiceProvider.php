<?php

namespace Localbitcoin\Endpoints;

use Illuminate\Support\ServiceProvider;

class LocalBtcServiceProvider extends ServiceProvider
{
     /**
     * {@inheritdoc}
     */
    public function boot()
    {
         $this->publishes([
            dirname(__DIR__).'/config/localbtc.php' => config_path('localbtc.php'),
        ], 'config');
    }

     /**
     * {@inheritdoc}
     */
    public function register()
    {
        $this->mergeConfigFrom(
            dirname(__DIR__).'/config/localbtc.php', 'localbtc'
        );
    }
}


