<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Filament\Resources\EventResource\RelationManagers;
use App\Models\Event;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Toggle;


use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
          return $form->schema([
        TextInput::make('title')
            ->required()
            ->maxLength(255),

        Textarea::make('description')
            ->columnSpanFull(),

        DateTimePicker::make('start_date')
            ->required(),

        DateTimePicker::make('end_date'),

        TextInput::make('location')
            ->maxLength(255),

        Toggle::make('is_all_day')
            ->default(false),

        Toggle::make('is_active')
            ->default(true),
    ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
        TextColumn::make('title')
            ->searchable(),

        TextColumn::make('start_date')
            ->dateTime(),

        TextColumn::make('location'),

        IconColumn::make('is_active')
            ->boolean(),
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
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
