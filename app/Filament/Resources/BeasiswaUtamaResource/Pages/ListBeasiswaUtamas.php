<?php

namespace App\Filament\Resources\BeasiswaUtamaResource\Pages;

use App\Filament\Resources\BeasiswaUtamaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBeasiswaUtamas extends ListRecords
{
    protected static string $resource = BeasiswaUtamaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
