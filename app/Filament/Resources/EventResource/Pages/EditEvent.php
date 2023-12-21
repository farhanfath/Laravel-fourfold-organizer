<?php

namespace App\Filament\Resources\EventResource\Pages;

use App\Filament\Resources\EventResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

use App\Models\event;
use Illuminate\Support\Facades\Storage;
class EditEvent extends EditRecord
{
    protected static string $resource = EventResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function(event $record){
                    if($record->thumbnail) {
                        Storage::disk('public')->delete($record->thumbnail);
                    }
                }   
            ),
        ];
    }
}
