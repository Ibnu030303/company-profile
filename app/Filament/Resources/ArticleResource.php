<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Models\Article;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Forms\Components\Select;
use stdClass;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-duplicate';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Textarea::make('content')
                    ->required(),
                FileUpload::make('image')
                    ->directory('artikel'),
            ])->columns(1);
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
                TextColumn::make('title'),
                TextColumn::make('content')->limit(50),
                ImageColumn::make('image'),
                TextColumn::make('status')
                    ->formatStateUsing(fn (string $state): string => ucwords("{$state}")),
                TextColumn::make('created_at')->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    BulkAction::make('Change Status')
                        ->icon('heroicon-m-check')
                        ->requiresConfirmation()
                        ->form([
                            Select::make('status')
                                ->label('Status')
                                ->options(['active' => 'Active', 'off' => 'Off'])
                                ->required(),
                        ])
                        ->action(function (EloquentCollection $records, array $data) {
                            if (isset($data['status'])) {
                                $records->each(function ($record) use ($data) {
                                    $record->update(['status' => $data['status']]);
                                });
                            }
                        }),
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
            'index' => Pages\ListArticles::route('/'),
            // 'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}
