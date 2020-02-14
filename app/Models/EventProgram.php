<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class EventProgram extends Model
{
    public static function getUserLastEvent()
    {
        return EventProgram::where(Auth::id())->get()->last() ?? 1;
    }
}
