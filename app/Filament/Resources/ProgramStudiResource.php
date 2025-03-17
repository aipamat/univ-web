<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProgramStudiResource\Pages;
use App\Filament\Resources\ProgramStudiResource\RelationManagers;
use App\Models\ProgramStudi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProgramStudiResource extends Resource
{
    protected static ?string $model = ProgramStudi::class;

    protected static ?string $navigationGroup = 'Fakultas & Program Studi';
    protected static ?string $navigationLabel = 'Program Studi';

    protected static ?string $navigationIcon = 'heroicon-o-list-bullet';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_prodi')
                ->label('Nama Program Studi')
                ->helperText('Maks. 50 Karakter.')
                ->minLength(5)
                ->maxLength(50)
                ->unique()
                ->required(),

                Select::make('id_fakultas')
                ->label('Nama Fakultas')
                ->relationship('fakultas', 'nama_fakultas')
                ->helperText('Pilih Fakultas Sesuai Dengan Program Studi')
                ->placeholder('Pilih Fakultas Dari Program Studi')
                ->required(),
                
                TextInput::make('link_website')
                ->label('Link Website')
                ->placeholder('Masukan link website prodi ( Data bisa menyusul )')
                ->url()
                ->suffixIcon('heroicon-m-globe-alt')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('fakultas.nama_fakultas')
                ->label('Fakultas')
                ->wrap()
                ->sortable(),
                TextColumn::make('nama_prodi')
                ->label('Program Studi')
                ->wrap(),         
                TextColumn::make('link_website')
                ->label('Link Website Prodi')
                ->wrap(),             
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
            'index' => Pages\ListProgramStudis::route('/'),
            'create' => Pages\CreateProgramStudi::route('/create'),
            'edit' => Pages\EditProgramStudi::route('/{record}/edit'),
        ];
    }
}
