<?php

namespace App\Filament\Resources\FasilitasUtamaResource\Pages;

use App\Filament\Resources\FasilitasUtamaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFasilitasUtama extends EditRecord
{
    protected static string $resource = FasilitasUtamaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
