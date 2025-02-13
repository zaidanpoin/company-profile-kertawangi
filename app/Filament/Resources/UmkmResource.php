<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UmkmResource\Pages;
use App\Filament\Resources\UmkmResource\RelationManagers;
use App\Models\Umkm;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class UmkmResource extends Resource
{
    protected static ?string $model = Umkm::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-storefront';
    protected static ?string $label = 'UMKM';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_produk')
                        ->required()
                        ->maxLength(255),
                Forms\Components\TextInput::make('nama_umkm')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('alamat')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('deskripsi')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nama_pemilik')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nomor_telepon')
                    ->label('no whatsapp')
                    ->tel()
                    ->required()
                    ->numeric(),
                Forms\Components\FileUpload::make('thumbnail')
                    ->required()
                    ->image()
                    ->maxSize(20480)
                    ->disk('umkm'),

                Forms\Components\TextInput::make('instagram_url')
                    ->url()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tiktok_url')
                    ->url()
                    ->maxLength(255),

                    Forms\Components\TextInput::make('harga')
                        ->required()
                        ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_produk')
                    ->searchable(),
                Tables\Columns\TextColumn::make('harga')
                    ->numeric()
                    ->sortable()
                    ->formatStateUsing(fn (string $state): string => 'Rp ' . number_format($state, 0, ',', '.')),
                Tables\Columns\TextColumn::make('nama_umkm')
                    ->searchable(),
                Tables\Columns\TextColumn::make('alamat')
                    ->searchable(),
                    Tables\Columns\TextColumn::make('deskripsi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_pemilik')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nomor_telepon')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\ImageColumn::make('thumbnail')
                    ->searchable()
                    ->disk('umkm')
                    ,

                Tables\Columns\TextColumn::make('instagram_url')

                    ->searchable(),
                Tables\Columns\TextColumn::make('tiktok_url')

                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()->after(function (Umkm $record) {
                    // delete single
                    if ($record->thumbnail) {
                        Storage::disk('umkm')->delete($record->thumbnail);
                    }
                    // delete multiple
                    if (is_array($record->thumbnail)) {
                        foreach ($record->thumbnail as $image) {
                            Storage::disk('umkm')->delete($image);
                        }
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
            'index' => Pages\ListUmkms::route('/'),
            'create' => Pages\CreateUmkm::route('/create'),
            'edit' => Pages\EditUmkm::route('/{record}/edit'),
        ];
    }
}
