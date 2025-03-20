<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BeasiswaUtamaResource\Pages;
use App\Filament\Resources\BeasiswaUtamaResource\RelationManagers;
use App\Models\BeasiswaUtama;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BeasiswaUtamaResource extends Resource
{
    protected static ?string $model = BeasiswaUtama::class;

    protected static ?string $navigationGroup = 'Beasiswa';
    protected static ?string $navigationLabel = 'Banner';

    protected static ?string $navigationIcon = 'heroicon-o-view-columns';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('banner')
                ->label('Banner Halaman Utama')
                ->helperText('Harus ukuran (1920x1100).')
                ->image()
                ->columnSpan(2)
                ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('banner')
                ->label('Banner'),
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
            'index' => Pages\ListBeasiswaUtamas::route('/'),
            'create' => Pages\CreateBeasiswaUtama::route('/create'),
            'edit' => Pages\EditBeasiswaUtama::route('/{record}/edit'),
        ];
    }
}
