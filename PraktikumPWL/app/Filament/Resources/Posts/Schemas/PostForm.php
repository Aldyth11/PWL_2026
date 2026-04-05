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
use Filament\Schemas\Components\Section;
use Filament\Schemas\icons\Heroicon;
use Filament\Schemas\Components\Group;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // Layout Horizontal: Left Section (Wider) & Right Section (Narrower)
                Group::make()
                    ->schema([
                        // Left Column - Post Details (lebih lebar)
                        Group::make()
                            ->schema([
                                Section::make('Post Details')
                                    ->description('Fill in the details of the post')
                                    ->icon('heroicon-o-document-text')
                                    ->schema([
                                        TextInput::make('title')->required(),
                                        TextInput::make('slug')->required(),
                                        Select::make('category_id')
                                            ->relationship('category', 'name')
                                            ->preload()
                                            ->searchable(),
                                        ColorPicker::make('color')->required(),
                                    ])->columns(2),
                                    MarkdownEditor::make('content')->required(),
                            ])
                            ->columnSpan(2), 

                        Group::make()
                            ->schema([
                                // Section 2 - Post Media
                                Section::make('Post Media')
                                    ->description('Upload media related to the post')
                                    ->icon('heroicon-o-photo')
                                    ->schema([
                                        FileUpload::make('image')
                                            ->disk('public')
                                            ->directory('post'),
                                    ]),

                                // Section 3 - Post Metadata
                                Section::make('Post Metadata')
                                    ->description('Additional information about the post')
                                    ->icon('heroicon-o-information-circle')
                                    ->schema([
                                        TagsInput::make('tags'),
                                        Checkbox::make('is_published')->label('Published'),
                                        DateTimePicker::make('published_at')
                                            ->format('Y-m-d H:i:s')
                                            ->label('Publish Date'),
                                    ]),

                            ])
                            ->columnSpan(1), // Kolom kanan lebih kecil (1/3)
                    ])
                    ->columns(3), 
            ])->columns(1);
    }
}
