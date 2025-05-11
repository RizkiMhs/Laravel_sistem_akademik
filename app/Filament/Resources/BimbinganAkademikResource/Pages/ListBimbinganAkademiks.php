<?php

namespace App\Filament\Resources\BimbinganAkademikResource\Pages;

use App\Filament\Resources\BimbinganAkademikResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBimbinganAkademiks extends ListRecords
{
    protected static string $resource = BimbinganAkademikResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
