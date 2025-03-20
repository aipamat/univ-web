<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimoniAlumniResource\Pages;
use App\Filament\Resources\TestimoniAlumniResource\RelationManagers;
use App\Models\TestimoniAlumni;
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

class TestimoniAlumniResource extends Resource
{
    protected static ?string $model = TestimoniAlumni::class;

    protected static ?string $navigationGroup = 'Testimoni';
    protected static ?string $navigationLabel = 'Testimoni Alumni';
    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

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

                TextInput::make('angkatan')
                ->label('Tahun Angkatan')
                ->helperText('Isi Sesuai Dengan Angkatan')
                ->placeholder('Contoh: 2020')
                ->numeric()
                ->minLength(4)
                ->maxLength(4)
                ->required(),

                Select::make('id_fakultas')
                ->label('Nama Fakultas Pimpinan')
                ->relationship('fakultas', 'nama_fakultas')
                ->helperText('Pilih Fakultas Sesuai Dengan Pimpinan')
                ->placeholder('Pilih fakultas pimpinan')
                ->columnSpan(2)
                ->reactive(),
                
                Select::make('id_prodi')
                ->label('Program Studi')
                ->options(fn ($get) => \App\Models\ProgramStudi::where('id_fakultas', $get('id_fakultas'))->pluck('nama_prodi', 'id'))
                ->placeholder('Pilih program studi')
                ->reactive()
                ->columnSpan(2)
                ->visible(fn ($get) => $get('id_fakultas'))
                ->required(fn ($get) => $get('id_fakultas')),

                

                TiptapEditor::make('deskripsi')
                ->label('Deskripsi Testimoni')
                ->tools([
                    'heading','bullet-list', 'ordered-list', 'checked-list', 'blockquote', 'hr',
                    'bold', 'italic', 'strike', 'underline', 'align-left', 'align-center', 'align-right', 'align-justify'
                ])
                ->output(TiptapOutput::Html) // Output dalam format HTML
                ->columnSpan(2)
                ->disableFloatingMenus()
                ->disableBubbleMenus() 
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('banner')
                ->label('Banner'),
                ImageColumn::make('foto')
                ->label('Foto Alumni'),
                TextColumn::make('nama')
                ->label('Nama & Gelar')
                ->wrap(),
                TextColumn::make('angkatan')
                ->label('Angkatan')
                ->wrap()
                ->sortable(),
                TextColumn::make('fakultas.nama_fakultas')
                ->label('Nama Fakultas')
                ->wrap()
                ->sortable(),
                TextColumn::make('programStudi.nama_prodi')
                ->label('Program Studi')
                ->sortable()
                ->wrap(),
                TextColumn::make('deskripsi')
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
            'index' => Pages\ListTestimoniAlumnis::route('/'),
            'create' => Pages\CreateTestimoniAlumni::route('/create'),
            'edit' => Pages\EditTestimoniAlumni::route('/{record}/edit'),
        ];
    }
}
