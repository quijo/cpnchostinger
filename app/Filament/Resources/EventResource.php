<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Filament\Resources\EventResource\RelationManagers;
use App\Models\Event;
use Filament\Forms;

use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Toggle;

use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use BackedEnum;

class EventResource extends Resource
{
 
    protected static ?string $model = Event::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-calendar';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            \Filament\Forms\Components\TextInput::make('title')
                ->required()
                ->maxLength(255),

              \Filament\Forms\Components\TextInput::make('locatoin')
                ->nullable()
                ->maxLength(255),

            \Filament\Forms\Components\Textarea::make('description')
                ->required()
                ->columnSpanFull(),

            \Filament\Forms\Components\FileUpload::make('image')
                ->image()
                ->directory('events')
                ->nullable(),

            \Filament\Forms\Components\DateTimePicker::make('start_date')->required(),

            \Filament\Forms\Components\DateTimePicker::make('end_date')->required(),
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
            'view' => Pages\ViewEvent::route('/{record}'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
