<?php

namespace App\Filament\Resources\Posts\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ColorColumn;
use Filament\Tables\Columns\imageColumn;
use Filament\Tables\Filters\Filter;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Filters\SelectFilter;

class PostsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('title')->searchable()->sortable(),
                TextColumn::make('slug')->searchable()->sortable(),
                TextColumn::make('category.name')->label('Category')->searchable()->sortable(),
                ColorColumn::make('color'),
                TextColumn::make('published_at')->dateTime()->label('Published At')->sortable(),
                ImageColumn::make('image')->disk('public')->label('Image'),
            ])->defaultSort('published_at', 'asc')
            ->filters([
                Filter::make('published_at')
                    ->form([
                        DatePicker::make('published_at')->label('Published From'),
                    ])
                    ->query(function ($query, $data) {
                    return $query->when(
                        $data['published_at'],
                        fn ($query, $date) => $query->whereDate('published_at', $date)
                    );
                }),
                SelectFilter::make('category_id')
                    ->label('Category')
                    ->relationship('category', 'name')
                    ->preload(),
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
