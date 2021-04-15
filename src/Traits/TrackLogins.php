<?php

namespace Modernben\TrackLogins\Traits;

use Modernben\TrackLogins\Models\Login;

trait TrackLogins
{
    public function logins()
    {
        return $this->hasMany(Login::class);
    }

    public function last_login()
    {
        return $this->hasOne(Login::class)->latest();
    }
}
