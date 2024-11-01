<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    protected function casts(): array
    {
        return [
            'tags' => 'array',
        ];
    }

    public function category():BelongsTo
    {
        return $this->belongsTo(EventCategory::class);
    }
}
