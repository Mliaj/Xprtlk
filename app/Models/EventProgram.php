<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class EventProgram extends Model
{
    protected $fillable = [
        'event_organizer_profile_id',
        'title',
        'logo_location',
        'start_date',
        'end_date',
        'location',
        'start_apply_date',
        'end_apply_date',
        'expert_fees',
        'description',
        'audience_size',
        'topics',
        'expert_roles',
        'presentation_types',
        'travel_fee',
        'accomodation_fee',
        'with_ticket',
    ];

    // protected $casts = [
    //     'with_ticket' => bool
    // ];

    // Mutators
    public function setExpertFeesAttribute($value)
    {
        $this->attributes['expert_fees'] = implode(", ", $value);
    }

    public function setTopicsAttribute($value)
    {
        $this->attributes['topics'] = implode(", ", $value);
    }

    public function setExpertRolesAttribute($value)
    {
        $this->attributes['expert_roles'] = implode(", ", $value);
    }

    public function setPresentationTypesAttribute($value)
    {
        $this->attributes['presentation_types'] = implode(", ", $value);
    }

    // Accessors
    public function getLogoLocationAttribute($value)
    {
        return 'storage/' . $value;
    }
}
