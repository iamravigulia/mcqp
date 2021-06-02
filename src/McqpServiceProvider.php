<?php

namespace edgewizz\mcqp;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class McqpServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Edgewizz\Mcqp\Controllers\McqpController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // dd($this);
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadViewsFrom(__DIR__ . '/components', 'mcqp');
        Blade::component('mcqp::mcqp.open', 'mcqp.open');
        Blade::component('mcqp::mcqp.index', 'mcqp.index');
        Blade::component('mcqp::mcqp.edit', 'mcqp.edit');
    }
}
