<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FasilitasUtamaResource\Pages;
use App\Filament\Resources\FasilitasUtamaResource\RelationManagers;
use App\Models\FasilitasUtama;
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

class FasilitasUtamaResource extends Resource
{
    protected static ?string $model = FasilitasUtama::class;

    protected static ?string $navigationGroup = 'Fasilitas';
    protected static ?string $navigationLabel = 'Banner dan Deskripsi';

    protected static ?string $navigationIcon = 'heroicon-o-view-columns';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('banner_utama')
                ->label('Banner Halaman Utama')
                ->helperText('Harus ukuran (1920x526).')
                ->image()
                ->columnSpan(2)
                ->required()

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('banner_utama')
                ->label('Banner')
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
            'index' => Pages\ListFasilitasUtamas::route('/'),
            'create' => Pages\CreateFasilitasUtama::route('/create'),
            'edit' => Pages\EditFasilitasUtama::route('/{record}/edit'),
        ];
    }
}
