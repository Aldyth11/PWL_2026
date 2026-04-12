<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Wizard;
use Filament\Schemas\Components\Wizard\Step;
use Filament\Schemas\Components\Group;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Checkbox;
use Filament\Actions\Action;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Wizard::make([
                    // Step 1: Product Info
                    Step::make('Product Info')
                        ->description('Isi informasi dasar produk')
                        ->schema([
                            Group::make([
                                TextInput::make('name')
                                    ->required(),
                                TextInput::make('sku')
                                    ->required(),
                            ])->columns(2),
                            MarkdownEditor::make('description')
                        ]),
                        // Step 2: Pricing
                        Step::make('Pricing')
                            ->description('Isi informasi harga produk')
                            ->schema([
                                Group::make([
                                    TextInput::make('price')
                                        ->required(),
                                    TextInput::make('stock')
                                        ->required(),
                                ])->columns(2),
                            ]),
                        
                        Step::make('Media & Status')
                            ->description('Unggah gambar produk dan atur statusnya')
                            ->schema([
                                FileUpload::make('image')
                                    ->disk('public')
                                    ->directory('product_images'),
                                Checkbox::make('is_active')
                                    ->label('Aktifkan Produk'),
                                Checkbox::make('is_featured')
                                    ->label('Tandai sebagai Produk Unggulan'),
                            ])
                            
                ])
                ->skippable()
                ->columnSpanFull()
                ->submitAction( 
                    Action::make('save')
                        ->label('Save Product')
                        ->button()
                        ->color('primary')
                        ->submit('save')
                )
            ]);
    }
}
