<?php

namespace App\Filament\Resources\Diseases;

use App\Filament\Resources\Diseases\Pages\CreateDisease;
use App\Filament\Resources\Diseases\Pages\EditDisease;
use App\Filament\Resources\Diseases\Pages\ListDiseases;
use App\Filament\Resources\Diseases\Schemas\DiseaseForm;
use App\Filament\Resources\Diseases\Tables\DiseasesTable;
use App\Models\Disease;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DiseaseResource extends Resource
{
    protected static ?string $model = Disease::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedHeart;

    protected static string|\UnitEnum|null $navigationGroup = 'Settings';

    protected static ?int $navigationSort = 5;

    public static function getModelLabel(): string
    {
        return __('Disease');
    }

    public static function getPluralModelLabel(): string
    {
        return __('Diseases');
    }

    public static function getNavigationGroup(): string|\UnitEnum|null
    {
        return __('Settings');
    }

    public static function form(Schema $schema): Schema
    {
        return DiseaseForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DiseasesTable::configure($table);
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
            'index' => ListDiseases::route('/'),
            'create' => CreateDisease::route('/create'),
            'edit' => EditDisease::route('/{record}/edit'),
        ];
    }
}
