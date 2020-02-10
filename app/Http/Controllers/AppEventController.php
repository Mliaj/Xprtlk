<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppEventController extends Controller
{
    public function showEventList()
    {
        return view('app_events.event_list');
    }

    /**
     * @param int $id
     */
    public function showEventPost($id)
    {
        return view('app_events.event_post');
    }
}
