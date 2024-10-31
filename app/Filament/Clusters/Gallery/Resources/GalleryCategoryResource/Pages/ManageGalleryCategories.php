<?php

namespace App\Filament\Clusters\Gallery\Resources\GalleryCategoryResource\Pages;

use App\Filament\Clusters\Gallery\Resources\GalleryCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageGalleryCategories extends ManageRecords
{
    protected static string $resource = GalleryCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
