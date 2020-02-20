<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'birth_date',
        'language',
        'contact',
        'address',
        'position',
        'company',
        'user_id',
    ];
}
