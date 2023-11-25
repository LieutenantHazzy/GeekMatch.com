<?php

namespace App\Filament\Resources\HomepageLineResource\Pages;

use App\Filament\Resources\HomepageLineResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHomepageLine extends EditRecord
{
    protected static string $resource = HomepageLineResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
