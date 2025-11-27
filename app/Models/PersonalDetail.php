<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalDetail extends Model
{
    use HasFactory;
    protected $guarded = [];

            //protected $table = '';

            protected $fillable = [
            'fullname',
            'headline',
            'photo',
            'email',
            'whatsapp',
            'location',
            'location_link',
            'birthday',
            'civil_status',
            'linkedin_url',
            'portfolio_url',
            'profile_summary',
    ];

    protected $casts = [

    ];
}