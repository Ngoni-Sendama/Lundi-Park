<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable=[
        'name',
        'slug',
        'date',
        'thumbnail',
        'details',
        'tags',
    ];
}