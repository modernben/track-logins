<?php

namespace Modernben\TrackLogins;

use Illuminate\Auth\Events\Login;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Modernben\TrackLogins\Listeners\LoggedIn;

class TrackLoginsEventServiceProvider extends ServiceProvider
{
    protected $listen = [
        Login::class => [
            LoggedIn::class,
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
    }
}
