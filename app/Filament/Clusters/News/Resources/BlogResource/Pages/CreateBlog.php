<?php

namespace App\Filament\Clusters\News\Resources\BlogResource\Pages;

use App\Filament\Clusters\News\Resources\BlogResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBlog extends CreateRecord
{
    protected static string $resource = BlogResource::class;
}
