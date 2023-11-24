<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SentenceResource\Pages;
use App\Filament\Resources\SentenceResource\RelationManagers;
use App\Models\Sentence;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SentenceResource extends Resource
{
    protected static ?string $model = Sentence::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-bottom-center-text';
    protected static ?string $navigationGroup = 'Sentence';
    protected static ?string $navigationLabel = 'Sentence';
    protected static ?string $label = 'Sentence';
    protected static ?string $pluralLabel = 'Sentence';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListSentences::route('/'),
            'create' => Pages\CreateSentence::route('/create'),
            'edit' => Pages\EditSentence::route('/{record}/edit'),
        ];
    }
}
