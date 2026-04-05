<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\DateTimePicker;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                TextInput::make('title')->required(),
                TextInput::make('slug')->required(),

                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->preload()
                    ->searchable(),
                ColorPicker::make('color')->required(),
                // MarkdownEditor::make('content')->required(),
                RichEditor::make('content')->required(),
                FileUpload::make('image')
                    ->disk('public')
                    ->directory('post'),
                TagsInput::make('tags'),
                Checkbox::make('is_published')->label('Published'),
                DateTimePicker::make('published_at')->format('Y-m-d H:i:s')->label('Publish Date'),
            ]);
    }
}
