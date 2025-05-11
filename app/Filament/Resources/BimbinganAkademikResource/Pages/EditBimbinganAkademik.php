<?php

namespace App\Filament\Resources\BimbinganAkademikResource\Pages;

use App\Filament\Resources\BimbinganAkademikResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBimbinganAkademik extends EditRecord
{
    protected static string $resource = BimbinganAkademikResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
