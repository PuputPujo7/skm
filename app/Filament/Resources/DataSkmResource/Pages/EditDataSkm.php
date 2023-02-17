<?php

namespace App\Filament\Resources\DataSkmResource\Pages;

use App\Filament\Resources\DataSkmResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDataSkm extends EditRecord
{
    protected static string $resource = DataSkmResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
