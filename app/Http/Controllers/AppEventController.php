<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Models\EventProgram;
use App\Models\ExpertFee;
use App\Models\ExpertRole;
use Carbon\Carbon;
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
    {
        $imgLocation = '';
        $start_date  = $this->validateDate($request->input('startDay')    . '-' . 
                                            $request->input('startMonth') . '-' .
                                            $request->input('startYear'));
        $end_date    = $this->validateDate($request->input('endDay')    . '-' .
                                            $request->input('endMonth') . '-' .
                                            $request->input('endYear'));

        $start_apply_date    = $this->validateDate($request->input('startApplyDay')  . '-' .
                                            $request->input('startApplyMonth')       . '-' .
                                            $request->input('startApplyYear')        . ' ' .
                                            $request->input('startApplyHour')        . ':00:00');
        $end_apply_date      = $this->validateDate($request->input('endApplyDay')  . '-' .
                                            $request->input('endApplyMonth')       . '-' .
                                            $request->input('endApplyYear')        . ' ' .
                                            $request->input('endApplyHour')        . ':00:00');

        if ($request->hasFile('logoEvent')) {
            $imgLocation = $request->file('logoEvent')->store('event_logos', 'public');
        }

        $data = [
            'event_organizer_profile_id' => Auth::id(),
            'title'                      => $request->input('titleEvent'),
            'logo_location'              => $imgLocation,
            'start_date'                 => $start_date,
            'end_date'                   => $end_date,
            'location'                   => $request->input('location'),
            'start_apply_date'           => $start_apply_date,
            'end_apply_date'             => $end_apply_date,
            'expert_fees'                => $request->input('expertFees'),
            'description'                => $request->input('description'),
            'audience_size'              => $request->input('audienceSize'),
            'topics'                     => $request->input('topics'),
            'expert_roles'               => $request->input('expertRoles'),
            'presentation_types'         => $request->input('expertPresentations'),
            'travel_fee'                 => $request->input('travelFee'),
            'accomodation_fee'           => $request->input('accomodationFee'),
            'with_ticket'                => $request->input('eventRegistration'),
        ];

        EventProgram::create($data);

        return redirect()
                ->route(Auth::user()->getUserHomeRoute())
                ->withSuccess('Event has been published');
    }

    private function validateDate(string $date)
    {
        if (date('d-m-Y', strtotime($date)) === $date) {
            return Carbon::parse($date)->format('Y-m-d');
        } elseif (date('d-m-Y H:i:s', strtotime($date)) === $date) {
            return Carbon::parse($date)->format('Y-m-d H:i:s');
        }

        return redirect()->route('event_create')
                        ->withErrors('Invalid date');
    }
}
