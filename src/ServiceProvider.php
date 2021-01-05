<?php

namespace Viyancs\Api;

use Viyancs\Api\Generator\CommandApiGenerator;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/Config/config.php', 'lumen-api-generator'
        );

        $this->app->singleton('command.api.make', function ($app) {
            return new CommandApiGenerator($app['files']);
        });

        $this->commands('command.api.make');
    }
}
