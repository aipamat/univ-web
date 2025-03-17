<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KampusResource\Pages;
use App\Filament\Resources\KampusResource\RelationManagers;
use App\Models\Kampus;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TextArea;
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

class KampusResource extends Resource
{
    protected static ?string $model = Kampus::class;

    protected static ?string $navigationGroup = 'Fasilitas';
    protected static ?string $navigationLabel = 'Daftar Kampus';

    protected static ?string $navigationIcon = 'heroicon-o-building-library';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('banner_utama')
                    ->label('Banner Halaman Utama')
                    ->helperText('Harus ukuran (1920x526).')
                    ->image()
                    ->columnSpan(2)
                    ->required(),

                FileUpload::make('gambar_kampus')
                    ->label('Gambar Kampus')
                    ->helperText('Harus ukuran (1920x526).')
                    ->image()
                    ->columnSpan(2)
                    ->required(),

                TextInput::make('nama_kampus')
                    ->label('Nama Kampus')
                    ->placeholder('Kampus 1 : International Women University')    
                    ->helperText('Maks. 70 Karakter.')
                    ->columnSpan(2)
                    ->minLength(5)
                    ->maxLength(70)
                    ->required(),

                TextArea::make('alamat')
                    ->label('Alamat')
                    ->placeholder('Jln. Otista GG. Kebon Karet No.29/5-C')
                    ->helperText('Maks. 150 Karakter.')
                    ->columnSpan(2)
                    ->autosize()
                    ->minLength(5)
                    ->maxLength(150)
                    ->required(),

                    TiptapEditor::make('deskripsi')
                    ->label('Deskripsi Kampus')
                    ->tools([
                        'heading','bullet-list', 'ordered-list', 'checked-list', 'blockquote', 'hr',
                        'bold', 'italic', 'strike', 'underline', 'align-left', 'align-center', 'align-right', 'align-justify'
                    ])
                    ->output(TiptapOutput::Html) // Output dalam format HTML
                    ->columnSpan(2)
                    ->disableFloatingMenus()
                    ->disableBubbleMenus()
                    ->required(),

                Select::make('fasilitas')
                    ->label('Nama Fasilitas')
                    ->relationship('fasilitas', 'nama') // Pastikan ini sesuai dengan model
                    ->placeholder('Pilih fasilitas sesuai kampus..')
                    ->multiple() // Supaya bisa multi-select
                    ->preload() // Supaya data langsung dimuat
                    ->searchable() // Supaya bisa dicari
                    ->columnSpan(2)
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('banner_utama')
                ->label('Banner'),
                ImageColumn::make('gambar_kampus')
                ->label('Gambar Kampus'),
                TextColumn::make('nama_kampus')
                ->label('Nama Kampus')
                ->wrap(),
                TextColumn::make('alamat')
                ->label('Alamat')
                ->wrap(),
                TextColumn::make('deskripsi')
                ->label('Deskripsi')
                ->wrap()
                ->html(),
                TextColumn::make('fasilitas.nama')
                ->label('Fasilitas')
                ->badge() // Menjadikan badge untuk tampilan lebih menarik
                ->separator(', ') // Memisahkan fasilitas dengan koma
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
            'index' => Pages\ListKampuses::route('/'),
            'create' => Pages\CreateKampus::route('/create'),
            'edit' => Pages\EditKampus::route('/{record}/edit'),
        ];
    }
}
