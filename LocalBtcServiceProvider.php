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
            __DIR__.'/config/localbtc.php' => config_path('localbtc.php'),
        ]);
    }

     /**
     * {@inheritdoc}
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/localbtc.php', 'localbtc'
        );
    }
}


