<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AccordionQuestionsResource\Pages;
use App\Filament\Resources\AccordionQuestionsResource\RelationManagers;
use App\Models\accordion_questions;
use App\Models\AccordionQuestions;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use stdClass;

class AccordionQuestionsResource extends Resource
{
    protected static ?string $model = accordion_questions::class;

    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('pertanyaan')
                    ->label('Pertanyaan'),
                TextInput::make('jawaban')
                    ->label('Jawaban'),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('No')->state(
                    static function (HasTable $livewire, stdClass $rowLoop): string {
                        // Explicitly convert string values to integers
                        $recordsPerPage = (int)$livewire->getTableRecordsPerPage();
                        $currentPage = (int)$livewire->getTablePage();

                        return (string) (
                            $rowLoop->iteration +
                            ($recordsPerPage * ($currentPage - 1))
                        );
                    }
                ),
                TextColumn::make('pertanyaan')
                    ->label('Pertanyaan'),
                TextColumn::make('jawaban')
                    ->label('Jawaban'),
                    ToggleColumn::make('status')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAccordionQuestions::route('/'),
            // 'create' => Pages\CreateAccordionQuestions::route('/create'),
            // 'edit' => Pages\EditAccordionQuestions::route('/{record}/edit'),
        ];
    }
}
