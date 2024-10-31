<?php

namespace App\Filament\Clusters\Gallery\Resources\GalleryResource\Pages;

use App\Filament\Clusters\Gallery\Resources\GalleryResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageGalleries extends ManageRecords
{
    protected static string $resource = GalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
