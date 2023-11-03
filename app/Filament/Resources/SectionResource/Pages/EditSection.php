<?php

namespace App\Filament\Resources\SectionResource\Pages;

use App\Filament\Resources\SectionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

use App\Models\section;
use Illuminate\Support\Facades\Storage;

class EditSection extends EditRecord
{
    protected static string $resource = SectionResource::class;

    protected function getActions(): array
    {
        return [
            //buat hapus record + data/ file yang sudah diupload pada folder storage
            Actions\DeleteAction::make()->after(
                function(section $record){
                    if($record->thumbnail) {
                        Storage::disk('public')->delete($record->thumbnail);
                    }
                }   
            ),
        ];
    }
}
