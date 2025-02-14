<?php

namespace App\Filament\Resources\KontenResource\Pages;

use App\Filament\Resources\KontenResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKontens extends ListRecords
{
    protected static string $resource = KontenResource::class;
    protected static ?string $title = 'Settings';

    protected function getHeaderActions(): array
    {
        return [

        ];
    }

}
