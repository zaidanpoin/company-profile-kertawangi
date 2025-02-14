<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AnggotaOrganisasiResource\Pages;
use App\Filament\Resources\AnggotaOrganisasiResource\RelationManagers;
use App\Models\AnggotaOrganisasi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class AnggotaOrganisasiResource extends Resource
{
    protected static ?string $model = AnggotaOrganisasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationLabel = 'Anggota Organisasi';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('jabatan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('images')
                    ->required()->disk('struktur'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jabatan')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('images')
                    ->disk('struktur')


                    ->searchable(),
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
                Tables\Actions\DeleteAction::make()->after(function (AnggotaOrganisasi $record) {
                    // delete single
                    if ($record->images) {
                        Storage::disk('struktur')->delete($record->images);
                    }
                    // delete multiple
                    if (is_array($record->images)) {
                        foreach ($record->images as $image) {
                            Storage::disk('struktur')->delete($image);
                        }
                    }


                }),
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


    protected static function shouldDeleteImagesOnDelete(): bool
    {
        return true;
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAnggotaOrganisasis::route('/'),
            'create' => Pages\CreateAnggotaOrganisasi::route('/create'),
            'edit' => Pages\EditAnggotaOrganisasi::route('/{record}/edit'),
        ];
    }
}
