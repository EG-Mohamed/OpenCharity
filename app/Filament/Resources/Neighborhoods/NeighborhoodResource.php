<?php

namespace App\Filament\Resources\Neighborhoods;

use App\Filament\Resources\Neighborhoods\Schemas\NeighborhoodForm;
use App\Filament\Resources\Neighborhoods\Schemas\NeighborhoodInfolist;
use App\Filament\Resources\Neighborhoods\Tables\NeighborhoodsTable;
use App\Models\Neighborhood;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class NeighborhoodResource extends Resource
{
    protected static ?string $model = Neighborhood::class;

    protected static ?string $slug = 'neighborhoods';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string|\UnitEnum|null $navigationGroup = 'Settings';

    protected static ?int $navigationSort = 5;

    public static function getModelLabel(): string
    {
        return __('Neighborhood');
    }

    public static function getPluralModelLabel(): string
    {
        return __('Neighborhoods');
    }

    public static function getNavigationGroup(): string|\UnitEnum|null
    {
        return __('Settings');
    }

    public static function form(Schema $schema): Schema
    {
        return NeighborhoodForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return NeighborhoodInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return NeighborhoodsTable::table($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNeighborhoods::route('/'),
            'create' => Pages\CreateNeighborhood::route('/create'),
            'edit' => Pages\EditNeighborhood::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['name'];
    }
}
