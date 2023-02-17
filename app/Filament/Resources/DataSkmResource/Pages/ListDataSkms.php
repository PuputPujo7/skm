<?php

namespace App\Filament\Resources\DataSkmResource\Pages;

use App\Filament\Resources\DataSkmResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDataSkms extends ListRecords
{
    protected static string $resource = DataSkmResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
