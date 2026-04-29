<?php

namespace App\Filament\Resources\Articles;

use App\Filament\Resources\Articles\Pages\CreateArticle;
use App\Filament\Resources\Articles\Pages\EditArticle;
use App\Filament\Resources\Articles\Pages\ListArticles;
use App\Filament\Resources\Articles\Pages\ViewArticle;
use App\Filament\Resources\Articles\Schemas\ArticleForm;
use App\Filament\Resources\Articles\Schemas\ArticleInfolist;
use App\Filament\Resources\Articles\Tables\ArticlesTable;
use App\Models\Article;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;


use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
// use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Actions\DeleteAction;

// clickable

use Filament\Actions\DeleteBulkAction;

use Filament\Actions\EditAction;








class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
         return $schema->schema([
        \Filament\Forms\Components\TextInput::make('title')
            ->required()
            ->live()
            ->maxLength(255)
            ->afterStateUpdated(fn ($state, callable $set) =>
                $set('slug', \Str::slug($state))
            ),

        \Filament\Forms\Components\TextInput::make('slug')
            ->required()
            ->unique(ignoreRecord: true)
            ->maxLength(255),

        \Filament\Forms\Components\RichEditor::make('content')
            ->required()
            ->columnSpanFull(),

        \Filament\Forms\Components\FileUpload::make('image')
            ->image()
            ->directory('articles'),

        \Filament\Forms\Components\Toggle::make('is_published')
            ->label('Published'),

        \Filament\Forms\Components\DateTimePicker::make('published_at'),

        \Filament\Forms\Components\Hidden::make('user_id')
            ->default(fn () => auth()->id()),
    ]);
        

    }

    public static function infolist(Schema $schema): Schema
    {
        return ArticleInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
         return $table->columns([
             TextColumn::make('title')
                ->searchable()
                ->sortable(),
                  IconColumn::make('is_published')
                ->boolean(),

            TextColumn::make('published_at')
                ->dateTime()
                ->sortable(),
            TextColumn::make('user.name')
                ->label('Author')
                ->sortable(),
               
        ])
        
        
          ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
            ]);


    //     \Filament\Tables\Columns\TextColumn::make('title')
    //         ->searchable()
    //         ->sortable(),

    //     \Filament\Tables\Columns\IconColumn::make('is_published')
    //         ->boolean()
    //         ->label('Published'),

    //     \Filament\Tables\Columns\TextColumn::make('published_at')
    //         ->dateTime()
    //         ->sortable(),

    //     \Filament\Tables\Columns\TextColumn::make('user.name')
    //         ->label('Author')
    //         ->sortable(),
    // ])
    // ->actions([
    //     \Filament\Tables\Actions\EditAction::make(),
    //     \Filament\Tables\Actions\ViewAction::make(),
    //     \Filament\Tables\Actions\DeleteAction::make(),
    // ])
    // ->bulkActions([
    //     \Filament\Tables\Actions\DeleteBulkAction::make(),
    
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
            'index' => ListArticles::route('/'),
            'create' => CreateArticle::route('/create'),
            'view' => ViewArticle::route('/{record}'),
            'edit' => EditArticle::route('/{record}/edit'),
        ];
    }
}
