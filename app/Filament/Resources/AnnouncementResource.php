<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AnnouncementResource\Pages;
use App\Models\Announcement;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\IconColumn;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\DateTimePicker;
use BackedEnum;
use Filament\Schemas\Schema;

// clickable
use Filament\Actions\EditAction;
use Filament\Actions\DeleteBulkAction;

use Filament\Tables\Actions\ViewAction;

use Filament\Forms\Components\RichEditor;

class AnnouncementResource extends Resource
{
    protected static ?string $model = Announcement::class;

    // Navigation icon (SAFE STRING VERSION)

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            \Filament\Forms\Components\TextInput::make('title')
                ->required()
                ->maxLength(255),

            RichEditor::make('content')
    ->required()
    ->columnSpanFull(),

           FileUpload::make('image')
            ->image()
            ->disk('public')
            ->directory('announcements'),

            \Filament\Forms\Components\Toggle::make('is_active')
                ->default(true),

            \Filament\Forms\Components\Toggle::make('is_featured'),

            \Filament\Forms\Components\DateTimePicker::make('published_at'),

            \Filament\Forms\Components\DateTimePicker::make('expires_at'),
        ]);
    }
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->searchable(),
                ImageColumn::make('image'),
                IconColumn::make('is_active')->boolean(),
                IconColumn::make('is_featured')->boolean(),
                TextColumn::make('published_at')->dateTime(),
            ])
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAnnouncements::route('/'),
            'create' => Pages\CreateAnnouncement::route('/create'),
            'edit' => Pages\EditAnnouncement::route('/{record}/edit'),
            'view' => Pages\ViewAnnouncement::route('/{record}'),
        ];
    }
}
