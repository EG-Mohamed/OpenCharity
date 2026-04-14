<?php

namespace App\Filament\Resources\CaseTypes;

use App\Filament\Resources\CaseTypes\Pages\CreateCaseType;
use App\Filament\Resources\CaseTypes\Pages\EditCaseType;
use App\Filament\Resources\CaseTypes\Pages\ListCaseTypes;
use App\Filament\Resources\CaseTypes\Schemas\CaseTypeForm;
use App\Filament\Resources\CaseTypes\Tables\CaseTypesTable;
use App\Models\CaseType;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CaseTypeResource extends Resource
{
    protected static ?string $model = CaseType::class;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return CaseTypeForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CaseTypesTable::configure($table);
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
            'index' => ListCaseTypes::route('/'),
            'create' => CreateCaseType::route('/create'),
            'edit' => EditCaseType::route('/{record}/edit'),
        ];
    }

    public static function getModelLabel(): string
    {
        return __('Case Type');
    }

    public static function getPluralModelLabel(): string
    {
        return __('Case Types');
    }

    public static function getNavigationIcon(): string|BackedEnum|null
    {
        return Heroicon::OutlinedTag;
    }

    public static function getNavigationGroup(): string|\UnitEnum|null
    {
        return __('Cases');
    }
}
