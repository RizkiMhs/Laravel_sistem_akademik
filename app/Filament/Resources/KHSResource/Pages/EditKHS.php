<?php

namespace App\Filament\Resources\KHSResource\Pages;

use App\Filament\Resources\KHSResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKHS extends EditRecord
{
    protected static string $resource = KHSResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
