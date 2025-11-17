<?php

namespace App\Filament\Resources\KomentarBeritaResource\Pages;

use App\Filament\Resources\KomentarBeritaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKomentarBeritas extends ListRecords
{
    protected static string $resource = KomentarBeritaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
