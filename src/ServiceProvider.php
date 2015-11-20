<?php

namespace Obonyojimmy\Pesapal;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use Route ;

class ServiceProvider extends LaravelServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot() {

        $this->handleConfigs();
        $this->handleRoutes();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {

        // Bind any implementations.
        $this->app->bind('pesapal', function () {
        return new \Obonyojimmy\Pesapal\Pesapal;
      });

    }

    

    private function handleConfigs() {

        $configPath = __DIR__ . '/../config/pesapal.php';

        $this->publishes([$configPath => config_path('pesapal.php')]);

        $this->mergeConfigFrom($configPath, 'pesapal');
    }

   
    private function handleRoutes() {

        include __DIR__.'/../routes.php';
    }
}
