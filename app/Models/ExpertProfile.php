<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExpertProfile extends Model
{
    protected $fillable = [
        'bio',
        'field',
        'expertise',
        'personal_info_id',
    ];
}
