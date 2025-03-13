<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VisiMisiTujuanResource\Pages;
use App\Filament\Resources\VisiMisiTujuanResource\RelationManagers;
use App\Models\VisiMisiTujuan;
use Filament\Forms;
use Filament\Forms\Form;
use FilamentTiptapEditor\TiptapEditor;
use FilamentTiptapEditor\Enums\TiptapOutput;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VisiMisiTujuanResource extends Resource
{
    protected static ?string $model = VisiMisiTujuan::class;

    protected static ?string $navigationGroup = 'Tentang Kampus';
    protected static ?string $navigationLabel = 'Visi, Misi, dan Tujuan';

    protected static ?string $navigationIcon = 'heroicon-o-eye';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TiptapEditor::make('visi')
                ->label('Visi')
                ->tools([
                    'heading','bullet-list', 'ordered-list', 'checked-list', 'blockquote', 'hr',
                    'bold', 'italic', 'strike', 'underline', 'align-left', 'align-center', 'align-right', 'align-justify'
                ])
                ->output(TiptapOutput::Html) // Output dalam format HTML
                ->columnSpan(2)
                ->disableFloatingMenus()
                ->disableBubbleMenus()
                ->required(),
                TiptapEditor::make('misi')
                ->label('Misi')
                ->tools([
                    'heading','bullet-list', 'ordered-list', 'checked-list', 'blockquote', 'hr',
                    'bold', 'italic', 'strike', 'underline', 'align-left', 'align-center', 'align-right', 'align-justify'
                ])
                ->output(TiptapOutput::Html) // Output dalam format HTML
                ->columnSpan(2)
                ->disableFloatingMenus()
                ->disableBubbleMenus()
                ->required(),
                TiptapEditor::make('tujuan')
                ->label('Tujuan')
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
                TextColumn::make('visi')
                ->label('Visi')
                ->wrap()
                ->limit(50)
                ->html(),
                TextColumn::make('misi')
                ->label('Misi')
                ->wrap()
                ->limit(50)
                ->html(),
                TextColumn::make('tujuan')
                ->label('Tujuan')
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
            'index' => Pages\ListVisiMisiTujuans::route('/'),
            'create' => Pages\CreateVisiMisiTujuan::route('/create'),
            'edit' => Pages\EditVisiMisiTujuan::route('/{record}/edit'),
        ];
    }
}
