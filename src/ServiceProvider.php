<?php
namespace Husnet\OmegaPlugin\Card;

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider as SP;
use rohsyl\OmegaCore\Utils\Common\Facades\Plugin as PluginManager;

class ServiceProvider extends SP
{

    public function register() {

    }

    public function boot() {

        $this->publishes([
            __DIR__.'/../resources/views/overt' => resource_path('views/vendor/omega-plugin-card/overt'),
        ]);

        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/omega/plugin/card'),
        ], 'public');

        // load routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        // load migrations
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        // load views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'omega-plugin-card');

        PluginManager::register(new Plugin());
    }
}