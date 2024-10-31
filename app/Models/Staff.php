<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable =[
        'department_id',
        'name',
        'picture',
        'subject'
    ];
}
