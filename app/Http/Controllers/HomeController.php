<?php

namespace App\Http\Controllers;

use App\Repositories\EventRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->model = new EventRepository;
    }

    public function showEventOrg()
    {
        $eventPrograms = $this->model->all();
        
        return view('dashboard.event_org', compact('eventPrograms'));
    }

    public function showExpert()
    {
        return view('dashboard.expert');
    }
}
