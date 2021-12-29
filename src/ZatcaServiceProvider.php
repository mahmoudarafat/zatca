<?php

namespace MahmoudArafat\ZATCA;

use Illuminate\Support\ServiceProvider;

class ZatcaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('MahmoudArafat\ZATCA\ZatcaController');
    }
}
