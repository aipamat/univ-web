<?php

namespace App\Filament\Resources\FasilitasUtamaResource\Pages;

use App\Filament\Resources\FasilitasUtamaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFasilitasUtamas extends ListRecords
{
    protected static string $resource = FasilitasUtamaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
