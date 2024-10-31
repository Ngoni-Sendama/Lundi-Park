<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gallery extends Model
{
    protected $fillable=[
        'gallery_category_id',
        'image',
        'caption'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(GalleryCategory::class);
    }
}
