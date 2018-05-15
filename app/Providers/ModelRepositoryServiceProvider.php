<?php

namespace Codevyu\Providers;

use Codevyu\Appointment;
use Codevyu\Repositories\AppointmentRepository;
use Illuminate\Support\ServiceProvider;

class ModelRepositoryServiceProvider extends ServiceProvider
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
        $this->app->bind('Codevyu\Repositories\AppointmentRepository',function ($app)
        {
            return new AppointmentRepository(new Appointment());
        });

    }
}
