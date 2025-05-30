<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DisplayFakultasResource\Pages;
use App\Filament\Resources\DisplayFakultasResource\RelationManagers;
use App\Models\DisplayFakultas;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextArea;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DisplayFakultasResource extends Resource
{
    protected static ?string $model = DisplayFakultas::class;

    protected static ?string $navigationGroup = 'Fakultas & Program Studi';
    protected static ?string $navigationLabel = 'Banner Utama';

    protected static ?string $navigationIcon = 'heroicon-o-view-columns';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('banner_utama')
                ->label('Banner Halaman Utama')
                ->helperText('Harus ukuran (1920x525).')
                ->image()
                ->columnSpan(2)
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('banner_utama')
                ->label('Banner Utama'),
                TextColumn::make('created_at')
                ->label('Waktu Dibuat')
                ->dateTime('d-m-Y H:i')
                ->timezone('Asia/Jakarta')
                ->sortable()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDisplayFakultas::route('/'),
            'create' => Pages\CreateDisplayFakultas::route('/create'),
            'edit' => Pages\EditDisplayFakultas::route('/{record}/edit'),
        ];
    }
}
