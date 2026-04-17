<?php

namespace App\Filament\Resources\States;

use App\Filament\Resources\States\Schemas\StateForm;
use App\Filament\Resources\States\Schemas\StateInfolist;
use App\Filament\Resources\States\Tables\StatesTable;
use App\Models\State;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class StateResource extends Resource
{
    protected static ?string $model = State::class;

    protected static ?string $slug = 'states';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string|\UnitEnum|null $navigationGroup = 'Settings';

    protected static ?int $navigationSort = 3;

    public static function getModelLabel(): string
    {
        return __('State');
    }

    public static function getPluralModelLabel(): string
    {
        return __('States');
    }

    public static function getNavigationGroup(): string|\UnitEnum|null
    {
        return __('Settings');
    }

    public static function form(Schema $schema): Schema
    {
        return StateForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return StateInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return StatesTable::table($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListStates::route('/'),
            'create' => Pages\CreateState::route('/create'),
            'edit' => Pages\EditState::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['name'];
    }
}
