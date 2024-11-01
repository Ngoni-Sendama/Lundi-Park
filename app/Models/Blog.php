<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blog extends Model
{
    protected $fillable = [
        'blog_category_id',
        'name',
        'slug',
        'date',
        'thumbnail',
        'details',
        'tags',
    ];

    public function blog_category(): BelongsTo
    {
        return $this->belongsTo(BlogCategory::class, 'blog_category_id');
    }

    protected function casts(): array
    {
        return [
            'tags' => 'array',
        ];
    }
}
