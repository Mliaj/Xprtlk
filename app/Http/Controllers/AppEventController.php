<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppEventController extends Controller
{
    public function showEventList()
    {
        return view('app_events.event_list');
    }

    public function showEventHistory()
    {
        return view('app_events.event_history');
    }
}
