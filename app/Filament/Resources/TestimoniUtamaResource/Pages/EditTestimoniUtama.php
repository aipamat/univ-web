<?php

namespace App\Filament\Resources\TestimoniUtamaResource\Pages;

use App\Filament\Resources\TestimoniUtamaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTestimoniUtama extends EditRecord
{
    protected static string $resource = TestimoniUtamaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
