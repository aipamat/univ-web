<?php

namespace App\Filament\Resources\DisplayFakultasResource\Pages;

use App\Filament\Resources\DisplayFakultasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDisplayFakultas extends ListRecords
{
    protected static string $resource = DisplayFakultasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
