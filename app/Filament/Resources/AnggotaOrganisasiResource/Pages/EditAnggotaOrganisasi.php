<?php

namespace App\Filament\Resources\AnggotaOrganisasiResource\Pages;

use App\Filament\Resources\AnggotaOrganisasiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAnggotaOrganisasi extends EditRecord
{
    protected static string $resource = AnggotaOrganisasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
