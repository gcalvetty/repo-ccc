<?php

namespace sis_ccc\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider {

    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        /*
          'sis_ccc\Events\SomeEvent' => [
          'sis_ccc\Listeners\EventListener',
          ],
         */
        'Illuminate\Auth\Events\Login' => [
            'sis_ccc\Listeners\AccesoUsuario',
            'sis_ccc\Listeners\RegAccesoUsuario',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
