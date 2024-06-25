<?php

namespace App\Filament\Resources\AccordionQuestionsResource\Pages;

use App\Filament\Resources\AccordionQuestionsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAccordionQuestions extends ListRecords
{
    protected static string $resource = AccordionQuestionsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
