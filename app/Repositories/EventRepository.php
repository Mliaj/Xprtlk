<?php

namespace App\Repositories;

use App\Models\EventProgram;
use Illuminate\Support\Facades\Auth;

class EventRepository
{
    public $model;

    public function __construct()
    {
        $this->model = new EventProgram;
    }

    public function all()
    {
        return $this->model
                ->select('id', 'title', 'logo_location', 'description')
                ->where('event_organizer_profile_id', Auth::id())
                ->get();
    }
}