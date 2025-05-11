<?php

namespace App\Filament\Resources\KHSResource\Pages;

use App\Filament\Resources\KHSResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKHS extends ListRecords
{
    protected static string $resource = KHSResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
