<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdministrasiResource\Pages;
use App\Filament\Resources\AdministrasiResource\RelationManagers;
use App\Models\Administrasi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AdministrasiResource extends Resource
{
    protected static ?string $model = Administrasi::class;
    protected static ?string $navigationLabel = 'Administrasi';

    protected static ?string $navigationIcon = 'heroicon-o-document-chart-bar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('penduduk')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('kepala_keluarga')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('penduduk_sementara')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('laki_laki')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('perempuan')
                    ->required()
                    ->numeric(),
                    Forms\Components\TextInput::make('mutasi_penduduk')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('penduduk')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kepala_keluarga')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('penduduk_sementara')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('laki_laki')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('perempuan')
                    ->numeric()
                    ->sortable(),
                    Tables\Columns\TextColumn::make('mutasi_penduduk')
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
            'index' => Pages\ListAdministrasis::route('/'),
            'create' => Pages\CreateAdministrasi::route('/create'),
            'edit' => Pages\EditAdministrasi::route('/{record}/edit'),
        ];
    }
}
