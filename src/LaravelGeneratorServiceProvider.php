<?php

namespace Disitec\LaravelGenerator;

use Disitec\LaravelGenerator\Commands\Scaffold;
use Illuminate\Support\ServiceProvider;

class LaravelGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                Scaffold::class,
            ]);
        }
        
        $this->loadTranslationsFrom(__DIR__.'/../lang', 'laravel-generator');
        
        $this->publishes([
            __DIR__.'/../templates/scaffold/controller' => resource_path('infyom/infyom-generator-templates/scaffold/controller')
        ], 'simplified-controller');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
