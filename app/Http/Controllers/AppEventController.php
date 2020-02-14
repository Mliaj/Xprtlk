<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Models\ExpertFee;
use App\Models\ExpertRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function storeEventPost(StoreEventRequest $request)
    {   dd($request->input('endDay') . '-' . 
        $request->input('endMonth') . '-' .
        $request->input('endYear'));
        $input = [
            'title'         => $request->input('eventTitle'),
            'logo_location' => $request->file('eventTitle')
                                ->storeAs('public', Auth::id() . \App\Models\EventProgram::getUserLastEvent()),
            'start_date'    => $request->input('startDay') . '-' . 
                               $request->input('startMonth') . '-' .
                               $request->input('startYear'),
            'end_date'      => $request->input('endDay') . '-' .
                               $request->input('endDay') . '-' .
                               $request->input('endDay'),
            'title' => $request->input('eventTitle'),
            'title' => $request->input('eventTitle'),
            'title' => $request->input('eventTitle'),
        ];

        dd($input);
    }

    private function validateDate(string $date)
    {
        
    }
}
