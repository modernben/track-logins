<?php

namespace Modernben\TrackLogins\Models;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    public function __construct()
    {
        parent::__construct();

        $this->table = config('track_logins.table');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
