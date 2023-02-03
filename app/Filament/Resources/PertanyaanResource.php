<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PertanyaanResource\Pages;
use App\Filament\Resources\PertanyaanResource\RelationManagers;
use App\Models\Pertanyaans;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PertanyaanResource extends Resource
{
    protected static ?string $model = Pertanyaans::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('pertanyaan')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('pertanyaan')
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
            'index' => Pages\ListPertanyaans::route('/'),
            'create' => Pages\CreatePertanyaan::route('/create'),
            'edit' => Pages\EditPertanyaan::route('/{record}/edit'),
        ];
    }    
}
