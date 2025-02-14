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

    protected function afterSave(): void
    {
        $this->redirect($this->getResource()::getUrl('index'));
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
