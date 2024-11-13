<?php

declare(strict_types=1);

namespace Slvler\Brave;

use Illuminate\Container\Container;
use Illuminate\Support\ServiceProvider;
use Slvler\Brave\Services\Brave;

class BraveServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishResources();
        }
    }
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/brave.php', 'brave');

        $this->app->singleton('brave', function (Container $app) {
            return new Brave($app);
        });
    }
    protected function publishResources()
    {
        $this->publishes([
            __DIR__.'/../config/brave.php' => config_path('brave.php'),
        ], 'brave');
    }
}
