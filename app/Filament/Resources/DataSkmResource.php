<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DataSkmResource\Pages;
use App\Filament\Resources\DataSkmResource\RelationManagers;
use App\Models\DataSkm;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DataSkmResource extends Resource
{
    protected static ?string $model = DataSkm::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('no tiket'),
                TextInput::make('nama'),
                TextInput::make('rating'),
                TextInput::make('total_nilai'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('no tiket'),
                Tables\Columns\TextColumn::make('nama'),
                Tables\Columns\TextColumn::make('rating'),
                Tables\Columns\TextColumn::make('total_nilai')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListDataSkms::route('/'),
            'create' => Pages\CreateDataSkm::route('/create'),
            'edit' => Pages\EditDataSkm::route('/{record}/edit'),
        ];
    }
}
