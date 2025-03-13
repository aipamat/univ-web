<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KerjaSamaResource\Pages;
use App\Filament\Resources\KerjaSamaResource\RelationManagers;
use App\Models\KerjaSama;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use FilamentTiptapEditor\TiptapEditor;
use FilamentTiptapEditor\Enums\TiptapOutput;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KerjaSamaResource extends Resource
{
    protected static ?string $model = KerjaSama::class;
    
    protected static ?string $navigationGroup = 'Tentang Kampus';
    protected static ?string $navigationLabel = 'Kerja Sama';

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('gambar')
                ->label('Gambar Mitra')
                ->helperText('Harus ukuran (600x742).')
                ->image()
                ->columnSpan(2)
                ->required(),
                TextInput::make('nama')
                ->label('Nama Mitra')
                ->helperText('Maks. 50 Karakter.')
                ->minLength(5)
                ->maxLength(50)
                ->required(),
                DatePicker::make('tanggal')
                ->label('Tanggal, Bulan, dan Tahun Kerja Sama')
                ->native(false)
                ->timezone('Asia/Jakarta')
                ->required(),
                TiptapEditor::make('deskripsi')
                ->label('Deskripsi Kerja Sama')
                ->tools([
                    'heading','bullet-list', 'ordered-list', 'checked-list', 'blockquote', 'hr',
                    'bold', 'italic', 'strike', 'underline', 'align-left', 'align-center', 'align-right', 'align-justify'
                ])
                ->output(TiptapOutput::Html) // Output dalam format HTML
                ->columnSpan(2)
                ->disableFloatingMenus()
                ->disableBubbleMenus()
                ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('gambar')
                ->label('Gambar Mitra'),
                TextColumn::make('nama')
                ->label('Nama Mitra')
                ->wrap(),
                TextColumn::make('deskripsi')
                ->label('Deskripsi')
                ->wrap()
                ->limit(50)
                ->html(),
                TextColumn::make('tanggal')
                ->label('Tanggal Kerja Sama')
                ->wrap()
                ->sortable(),
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
            'index' => Pages\ListKerjaSamas::route('/'),
            'create' => Pages\CreateKerjaSama::route('/create'),
            'edit' => Pages\EditKerjaSama::route('/{record}/edit'),
        ];
    }
}
