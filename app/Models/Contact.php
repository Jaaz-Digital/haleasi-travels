<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contact';

    protected $fillable = [
        'name'
        , 'email'
        , 'phone'
        , 'destination'
        , 'duration'
        , 'description'
        , 'utm_source'
        , 'utm_medium'
        , 'utm_campaign'
        , 'utm_content'
        , 'utm_term'
        , 'utm_initial_referrer'
        , 'utm_last_referrer'
        , 'utm_landing_page'
        , 'utm_visite'
        , 'browsername'
        , 'browserversion'
        , 'browserplatform'
        , 'ip_address'
    ];

    protected $casts = [
        'created_at' => 'datetime:d M Y H:i:s A'
    ];

    protected $dates = [
        'created_at', 'updated_at'
    ];
}
