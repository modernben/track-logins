<?php

namespace Modernben\TrackLogins;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Modernben\TrackLogins\TrackLogins
 */
class TrackLoginsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'track_logins';
    }
}
