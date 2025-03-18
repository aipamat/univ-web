<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TentangKampusResource\Pages;
use App\Filament\Resources\TentangKampusResource\RelationManagers;
use App\Models\TentangKampus;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextArea;
use Filament\Forms\Components\FileUpload;
use FilamentTiptapEditor\TiptapEditor;
use FilamentTiptapEditor\Enums\TiptapOutput;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TentangKampusResource extends Resource
{
    protected static ?string $model = TentangKampus::class;

    protected static ?string $navigationGroup = 'Tentang Kampus';
    protected static ?string $navigationLabel = 'Banner, Deskripsi, Sejarah';

    protected static ?string $navigationIcon = 'heroicon-o-view-columns';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('banner')
                ->label('Banner Halaman Utama')
                ->helperText('Harus ukuran (1920x526).')
                ->image()
                ->columnSpan(2)
                ->required(),

                FileUpload::make('gambar_sejarah')
                ->label('Gambar Sejarah Kampus')
                ->helperText('Harus ukuran (800x800).')
                ->image()
                ->columnSpan(2)
                ->required(),
                
                TiptapEditor::make('deskripsi_sejarah')
                ->label('Deskripsi Sejarah')
                ->tools([
                    'heading','bullet-list', 'ordered-list', 'checked-list', 'blockquote', 'hr',
                    'bold', 'italic', 'strike', 'underline', 'align-left', 'align-center', 'align-right', 'align-justify',
                    'link', 'media', 'oembed', 'table', 'grid-builder', 'details'
                ])
                ->acceptedFileTypes(['image/png', 'image/jpeg', 'image/gif', 'image/webp']) // Format gambar yang diterima
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
                ImageColumn::make('banner')
                ->label('Banner'),
                ImageColumn::make('gambar_sejarah')
                ->label('Gambar Sejarah Kampus'),
                TextColumn::make('deskripsi_sejarah')
                ->label('Deskripsi Sejarah')
                ->wrap()
                ->limit(50)
                ->html(),
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
            'index' => Pages\ListTentangKampuses::route('/'),
            'create' => Pages\CreateTentangKampus::route('/create'),
            'edit' => Pages\EditTentangKampus::route('/{record}/edit'),
        ];
    }
}
