<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\IconEntry;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;

class ProductInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                Tabs::make('Product Details')
                    ->tabs([
                        // TAB 1: INFO DASAR
                        Tabs\Tab::make('Product Info')
                            ->icon('heroicon-o-information-circle')
                            ->schema([
                                TextEntry::make('name')
                                    ->label('Product Name')
                                    ->weight('bold')
                                    ->color('primary'),
                                TextEntry::make('sku')
                                    ->label('SKU')
                                    ->badge()
                                    ->color('success'),
                                TextEntry::make('description')
                                    ->label('Description')
                                    ->markdown(), 
                                TextEntry::make('created_at')
                                    ->label('Registered At')
                                    ->dateTime('d M Y')
                                    ->color('info'),
                            ]),

                        // TAB 2: HARGA & STOK
                        Tabs\Tab::make('Pricing & Stock')
                            ->icon('heroicon-o-currency-dollar')
                            ->schema([
                                TextEntry::make('price')
                                    ->label('Price')
                                    ->icon('heroicon-o-currency-dollar'),
                                TextEntry::make('stock')
                                    ->label('Current Stock')
                                    ->numeric(),
                            ]),

                        // TAB 3: MEDIA & STATUS
                        Tabs\Tab::make('Media & Status')
                            ->icon('heroicon-o-photo')
                            ->schema([
                                ImageEntry::make('image')
                                    ->label('Product Image')
                                    ->disk('public'),
                                TextEntry::make('price')
                                    ->label('Product Price')
                                    ->weight('bold')
                                    ->color('primary')
                                    ->icon('heroicon-o-currency-dollar'),
                                TextEntry::make('stock')
                                    ->label('Product Stock')
                                    ->weight('bold')
                                    ->color('primary'),
                                IconEntry::make('is_active')
                                    ->label('Is Active?')
                                    ->boolean(),
                                IconEntry::make('is_featured')
                                    ->label('Is Featured?')
                                    ->boolean(),
                            ])
                    ])
                    ->columnSpanFull()
                    ->vertical(),
                Section::make('Product Info')
                    ->description('Detailed information about the product.')
                    ->schema([
                        TextEntry::make('name')
                            ->label('Product Name')
                            ->weight('bold')
                            ->color('primary'),
                        TextEntry::make('id')
                            ->label('Product ID'),
                        TextEntry::make('sku')
                            ->label('Product SKU')
                            ->badge()
                            ->color('success'),
                        TextEntry::make('description')
                            ->label('Product Description'),
                        TextEntry::make('created_at')
                            ->label('Product Created At')
                            ->date('d M Y')
                            ->color('info'),
                    ])
                ->columnSpanFull(),
                Section::make('Pricing & Stock')
                    ->description('Pricing and stock information for the product.')
                    ->schema([
                        TextEntry::make('price')
                            ->label('Product Price')
                            ->icon('heroicon-o-currency-dollar'),
                        TextEntry::make('stock')
                            ->label('Product Stock'),
                    ])
                ->columnSpanFull(),        
                Section::make('Image & Status')
                    ->description('Product image and status information.')
                    ->schema([
                        ImageEntry::make('image')
                            ->label('Product Image')
                            ->disk('public'),
                        TextEntry::make('price')
                            ->label('Product Price')
                            ->weight('bold')
                            ->color('primary')
                            ->icon('heroicon-o-currency-dollar'),
                        TextEntry::make('stock')
                            ->label('Product Stock')
                            ->weight('bold')
                            ->color('primary'),
                        IconEntry::make('is_active')
                            ->label('Is Active?')
                            ->boolean(),
                        IconEntry::make('is_featured')
                            ->label('Is Featured?')
                            ->boolean(),
                    ]),
            ]);
    }
}
