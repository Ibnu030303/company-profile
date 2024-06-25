<?php

namespace App\Filament\Resources\AccordionQuestionsResource\Pages;

use App\Filament\Resources\AccordionQuestionsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAccordionQuestions extends EditRecord
{
    protected static string $resource = AccordionQuestionsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
