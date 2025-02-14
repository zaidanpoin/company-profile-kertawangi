<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KontenResource\Pages;
use App\Filament\Resources\KontenResource\RelationManagers;
use App\Models\Konten;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KontenResource extends Resource
{
    protected static ?string $model = Konten::class;
    protected static ?string $navigationLabel = 'Settings';
    protected static ?string $navigationIcon = 'heroicon-o-photo';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('gambar_depan')
                    ->image()
                    ->required()
                    ->directory('uploads/konten'),

                Forms\Components\FileUpload::make('gambar_pak_kades')
                    ->image()
                    ->required()
                    ->directory('uploads/konten'),
                Forms\Components\TextInput::make('nama_pak_kades')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('kata_sambutan')
                    ->required()
                    ->columnSpanFull(),
                    Forms\Components\FileUpload::make('gambar_about')
                    ->image()
                    ->required()
                    ->directory('uploads/konten'),
                    Forms\Components\FileUpload::make('gambar_struktur')
                    ->image()
                    ->required()
                    ->directory('uploads/konten'),
                    Forms\Components\TextInput::make('about')
                    ->required()
                ,
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('gambar_depan')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('gambar_pak_kades')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_pak_kades')
                    ->searchable(),
                    Tables\Columns\TextColumn::make('kata_sambutan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                    Tables\Columns\ImageColumn::make('gambar_about')
                        ->searchable(),
                    Tables\Columns\TextColumn::make('about')
                        ->searchable(),
                    Tables\Columns\ImageColumn::make('gambar_struktur')
                        ->searchable(),
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
            'index' => Pages\ListKontens::route('/'),
            'create' => Pages\CreateKonten::route('/create'),
            'edit' => Pages\EditKonten::route('/{record}/edit'),
        ];
    }
}
