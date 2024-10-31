<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable=[
        'event_category_id',
        'name',
        'slug',
        'date',
        'thumbnail',
        'details',
        'tags'
    ];
}
