<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class EventProgram extends Model
{
    use SoftDeletes;

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

    protected $casts = [
        'with_ticket' => 'boolean',
    ];

    protected $dates = [
        'start_date',
        'end_date',
        'start_apply_date',
        'end_apply_date',
    ];

    // Relationship
    public function eventOrgProfile()
    {
        return $this->belongsTo('App\Models\EventOrganizerProfile');
    }

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
    public function getWithTicketAttribute($value)
    {
        return $value == true ? 'Yes' : 'No';
    }

    // Custom get attributes
    public function getExplodedDate(string $date_type)
    {
        return [ 
                'month' => $this->$date_type->month,
                'day'   => $this->$date_type->day,
                'year'  => $this->$date_type->year,
                'hour'  => \Str::contains($date_type, 'apply') ? $this->$date_type->hour : 0,
                ];
    }

    public function getScheduleDate()
    {
        return $this->start_date->format('M d, Y') . ' - ' . $this->end_date->format('M d, Y');
    }

    public function getApplyDate()
    {
        return $this->start_apply_date->format('M d, Y') . ' - ' . $this->end_apply_date->format('M d, Y');
    }

    public function getTopics()
    {
        return array_map('trim', explode(', ', $this->topics));
    }

    public function getExpertFees()
    {
        return ExpertFee::select('description')->findMany(explode(', ', $this->expert_fees));
    }

    public function getExpertRoles()
    {
        return ExpertRole::select('role')->findMany(explode(', ', $this->expert_roles));
    }

    public function getPresentationTypes()
    {
        return array_map('trim', explode(', ', $this->presentation_types));
    }


    // Delete
    public function deleteImage()
    {
        Storage::delete(str_replace('storage/', 'public/', $this->logo_location));
    }
}
