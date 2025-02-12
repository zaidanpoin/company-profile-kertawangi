<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GaleriResource\Pages;
use App\Filament\Resources\GaleriResource\RelationManagers;
use App\Models\Galeri;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GaleriResource extends Resource
{
    protected static ?string $model = Galeri::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('gambar1')
                    ->required()
                    ->image()
                    ->maxSize(51200) // 50 MB
                    ->disk('galeri'),
                Forms\Components\FileUpload::make('gambar2')
                    ->required()
                    ->image()
                    ->maxSize(51200) // 50 MB
                    ->disk('galeri'),
                Forms\Components\FileUpload::make('gambar3')
                    ->required()
                    ->image()
                    ->maxSize(51200) // 50 MB
                    ->disk('galeri'),
                Forms\Components\FileUpload::make('gambar4')
                    ->required()
                    ->image()
                    ->maxSize(51200) // 50 MB
                    ->disk('galeri'),
                Forms\Components\FileUpload::make('gambar5')
                    ->required()
                    ->image()
                    ->maxSize(51200) // 50 MB
                    ->disk('galeri'),
                Forms\Components\FileUpload::make('gambar6')
                    ->required()
                    ->image()
                    ->maxSize(51200) // 50 MB
                    ->disk('galeri'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('gambar1')
                    ->label('Gambar 1')
                    ->sortable()
                    ->searchable()
                    ->disk('galeri'),
                Tables\Columns\ImageColumn::make('gambar2')
                    ->label('Gambar 2')
                    ->sortable()
                    ->searchable()
                    ->disk('galeri'),
                Tables\Columns\ImageColumn::make('gambar3')
                    ->label('Gambar 3')
                    ->sortable()
                    ->searchable()
                    ->disk('galeri'),
                Tables\Columns\ImageColumn::make('gambar4')
                    ->label('Gambar 4')
                    ->sortable()
                    ->searchable()
                    ->disk('galeri'),
                Tables\Columns\ImageColumn::make('gambar5')
                    ->label('Gambar 5')
                    ->sortable()
                    ->searchable()
                    ->disk('galeri'),
                Tables\Columns\ImageColumn::make('gambar6')
                    ->label('Gambar 6')
                    ->sortable()
                    ->searchable()
                    ->disk('galeri'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()->after(function (Galeri $record) {
                    // delete single
                    if ($record->gambar1) {
                        Storage::disk('galeri')->delete($record->gambar1);
                    }
                    if ($record->gambar2) {
                        Storage::disk('galeri')->delete($record->gambar2);
                    }
                    if ($record->gambar3) {
                        Storage::disk('galeri')->delete($record->gambar3);
                    }
                    if ($record->gambar4) {
                        Storage::disk('galeri')->delete($record->gambar4);
                    }
                    if ($record->gambar5) {
                        Storage::disk('galeri')->delete($record->gambar5);
                    }
                    if ($record->gambar6) {
                        Storage::disk('galeri')->delete($record->gambar6);
                    }


                })
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
            'index' => Pages\ListGaleris::route('/'),
            'create' => Pages\CreateGaleri::route('/create'),
            'edit' => Pages\EditGaleri::route('/{record}/edit'),
        ];
    }
}
