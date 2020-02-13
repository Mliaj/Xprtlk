<?php

namespace App\Http\Controllers;

use App\Models\ExpertFee;
use App\Models\ExpertRole;
use Illuminate\Http\Request;

class AppEventController extends Controller
{
    public function showEventList()
    {
        return view('app_events.list');
    }

    /**
     * @param int $id
     */
    public function showEventPost($id)
    {
        return view('app_events.show');
    }

    public function createEventPost()
    {
        $expertFees  = ExpertFee::all();
        $expertRoles = ExpertRole::all();

        return view('app_events.create', compact('expertFees', 'expertRoles'));
    }

    public function storeEventPost(Request $request)
    {
        dd($request->input(), $request->file('logoEvent'));
    }
}
