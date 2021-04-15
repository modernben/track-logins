<?php

namespace Modernben\TrackLogins;

use Illuminate\Auth\Events\Login;
use Modernben\TrackLogins\Listeners\LoggedIn;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class TrackLoginsEventServiceProvider extends ServiceProvider
{
    protected $listen = [
        Login::class => [
            LoggedIn::class,
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }
}
