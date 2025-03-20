<?php

namespace App\Filament\Resources\TestimoniUtamaResource\Pages;

use App\Filament\Resources\TestimoniUtamaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTestimoniUtamas extends ListRecords
{
    protected static string $resource = TestimoniUtamaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
