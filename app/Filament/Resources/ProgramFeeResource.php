<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProgramFeeResource\Pages;
use App\Filament\Resources\ProgramFeeResource\RelationManagers;
use App\Models\ProgramFee;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProgramFeeResource extends Resource
{
    protected static ?string $model = ProgramFee::class;

    protected static ?string $navigationIcon = 'heroicon-o-ticket';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('program_id')
                    ->relationship('program', 'name')
                    ->required(),
                TextInput::make('fee')
                    ->required()
                    ->numeric()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('program.name')->label('Program')->sortable()->searchable(),
                TextColumn::make('fee')->sortable()->searchable(),
                TextColumn::make('created_at')->dateTime(),
                TextColumn::make('updated_at')->dateTime(),
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
            'index' => Pages\ListProgramFees::route('/'),
            'create' => Pages\CreateProgramFee::route('/create'),
            'edit' => Pages\EditProgramFee::route('/{record}/edit'),
        ];
    }
}
