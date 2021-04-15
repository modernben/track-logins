<?php

namespace Modernben\TrackLogins\Listeners;

use Illuminate\Auth\Events\Login;

class LoggedIn
{
    public function handle(Login $event)
    {
        $event->user->logins()->create();
    }
}
