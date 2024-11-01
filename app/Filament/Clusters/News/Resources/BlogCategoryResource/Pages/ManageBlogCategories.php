<?php

namespace App\Filament\Clusters\News\Resources\BlogCategoryResource\Pages;

use App\Filament\Clusters\News\Resources\BlogCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageBlogCategories extends ManageRecords
{
    protected static string $resource = BlogCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
