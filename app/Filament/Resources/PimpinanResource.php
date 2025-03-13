<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PimpinanResource\Pages;
use App\Filament\Resources\PimpinanResource\RelationManagers;
use App\Models\Pimpinan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use FilamentTiptapEditor\TiptapEditor;
use FilamentTiptapEditor\Enums\TiptapOutput;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PimpinanResource extends Resource
{
    protected static ?string $model = Pimpinan::class;

    protected static ?string $navigationGroup = 'Data Pendukung';
    protected static ?string $navigationLabel = 'Pimpinan';

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('foto')
                ->label('Foto Pimpinan')
                ->helperText('Harus ukuran (188x187).')
                ->image()
                ->columnSpan(2)
                ->required(),
                TextInput::make('nama')
                ->label('Nama Pimpinan Dan Gelar')
                ->helperText('Maks. 50 Karakter.')
                ->minLength(5)
                ->maxLength(50)
                ->required(),
                Select::make('status')
                ->label('Status Jabatan')
                ->options([
                    'Rektor' => 'Rektor',
                    'Wakil Rektor' => 'Wakil Rektor',
                    'Dekan' => 'Dekan',
                    'Kepala Prodi' => 'Kepala Prodi',
                ])
                ->reactive()
                ->placeholder('Pilih status jabatan')
                ->required(),
                TextInput::make('bidang')
                ->label('Nama Bidang Pimpinan')
                ->helperText('Maks. 50 Karakter.')
                ->minLength(5)
                ->maxLength(50)
                ->columnSpan(2)
                ->visible(fn ($get) => $get('status') === 'Dekan')
                ->required(fn ($get) => $get('status') === 'Dekan'),
                TiptapEditor::make('kata_sambutan')
                ->label('Kata Sambutan Pimpinan')
                ->tools([
                    'heading','bullet-list', 'ordered-list', 'checked-list', 'blockquote', 'hr',
                    'bold', 'italic', 'strike', 'underline', 'align-left', 'align-center', 'align-right', 'align-justify'
                ])
                ->output(TiptapOutput::Html) // Output dalam format HTML
                ->columnSpan(2)
                ->disableFloatingMenus()
                ->disableBubbleMenus()
                ->visible(fn ($get) => $get('status') === 'Rektor' || $get('status') === 'Dekan')
                ->required(fn ($get) => $get('status') === 'Rektor' || $get('status') === 'Dekan'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('foto')
                ->label('Foto Pimpinan'),
                TextColumn::make('nama')
                ->label('Nama & Gelar')
                ->wrap(),
                TextColumn::make('status')
                ->label('Jabatan')
                ->wrap()
                ->sortable(),
                TextColumn::make('bidang')
                ->label('Bidang')
                ->wrap()
                ->html()
                ->limit(50),
                TextColumn::make('kata_sambutan')
                ->label('Kata Sambutan')
                ->wrap()
                ->html()
                ->limit(50),
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
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListPimpinans::route('/'),
            'create' => Pages\CreatePimpinan::route('/create'),
            'edit' => Pages\EditPimpinan::route('/{record}/edit'),
        ];
    }
}
