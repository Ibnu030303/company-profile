<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PriceResource\Pages;
use App\Models\Price;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class PriceResource extends Resource
{
    protected static ?string $model = Price::class;

    protected static ?string $navigationIcon = 'heroicon-o-wallet';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('category')
                    ->label('Category')
                    ->required()
                    ->live()
                    ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),
                TextInput::make('price')
                    ->label('Price')
                    ->required(),
                TextInput::make('deskripsi')
                    ->label('Deskripsi')
                    ->required(),
                TextInput::make('benefit')
                    ->label('Benefit')
                    ->required()
                    ->array(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('category')->label('Category'),
                TextColumn::make('price')->label('Price'),
                TextColumn::make('deskripsi')->label('Deskripsi'),
                TextColumn::make('benefit')->label('Benefit')->formatStateUsing(fn ($state) => is_array($state) ? implode(', ', $state) : $state),
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
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()->modal(), // This line enables the create action modal
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
            'index' => Pages\ListPrices::route('/'),
            'create' => Pages\CreatePrice::route('/create'), // Optional, if you still want to have a separate create page
            'edit' => Pages\EditPrice::route('/{record}/edit'),
        ];
    }
}
