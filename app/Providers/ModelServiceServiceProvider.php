<?php

namespace App\Providers;

use App\Services\AppointmentService;
use Illuminate\Support\ServiceProvider;

class ModelServiceServiceProvider extends ServiceProvider
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
        $this->app->bind('AppointmentService',function ($app){
            return new AppointmentService($app->make('App\Repository\AppointmentInterface'));
        });
    }
}
