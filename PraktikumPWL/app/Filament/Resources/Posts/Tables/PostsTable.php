<?php

namespace App\Filament\Resources\Posts\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ColorColumn;
use Filament\Tables\Columns\imageColumn;

class PostsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('title')->searchable()->sortable(),
                TextColumn::make('category.name')->label('Category')->searchable()->sortable(),
                ColorColumn::make('color'),
                TextColumn::make('published_at')->dateTime()->label('Published At')->sortable(),
                ImageColumn::make('image')->disk('public')->label('Image'),
            ])->defaultSort('published_at', 'asc')
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
