<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Models\WorkshopParticipant;
use Filament\Tables\Filters\SelectFilter;
use App\Filament\Resources\WorkshopParticipantResource\Pages;

class WorkshopParticipantResource extends Resource
{
    protected static ?string $model = WorkshopParticipant::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\Textinput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textinput::make('occupation')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('workshop_id')
                    ->relationship('workshop', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),

                Forms\Components\Select::make('booking_transaction_id')
                    ->relationship('bookingTransaction', 'booking_trx_id')
                    ->searchable()
                    ->preload()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\ImageColumn::make('workshop.thumbnail'),
                Tables\Columns\TextColumn::make('bookingTransaction.booking_trx_id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
            ])
            ->filters([
                //
                SelectFilter::make('workshop_id')
                    ->label('workshop')
                    ->relationship('workshop', 'name')
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
            'index' => Pages\ListWorkshopParticipants::route('/'),
            'create' => Pages\CreateWorkshopParticipant::route('/create'),
            'edit' => Pages\EditWorkshopParticipant::route('/{record}/edit'),
        ];
    }
}
