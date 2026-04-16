<?php

namespace App\Filament\Resources\Families;

use App\Filament\Resources\Families\Pages\CreateFamily;
use App\Filament\Resources\Families\Pages\EditFamily;
use App\Filament\Resources\Families\Pages\ListFamilies;
use App\Filament\Resources\Families\Pages\ViewFamily;
use App\Filament\Resources\Families\RelationManagers\AssistanceSchedulesRelationManager;
use App\Filament\Resources\Families\RelationManagers\CharityCasesRelationManager;
use App\Filament\Resources\Families\RelationManagers\DocumentsRelationManager;
use App\Filament\Resources\Families\RelationManagers\DonationTargetsRelationManager;
use App\Filament\Resources\Families\RelationManagers\FamilyMembersRelationManager;
use App\Filament\Resources\Families\RelationManagers\VisitsRelationManager;
use App\Filament\Resources\Families\Schemas\FamilyForm;
use App\Filament\Resources\Families\Schemas\FamilyInfolist;
use App\Filament\Resources\Families\Tables\FamiliesTable;
use App\Models\Family;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FamilyResource extends Resource
{
    protected static ?string $model = Family::class;

    protected static ?string $recordTitleAttribute = 'code';

    public static function form(Schema $schema): Schema
    {
        return FamilyForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return FamiliesTable::configure($table);
    }

    public static function infolist(Schema $schema): Schema
    {
        return FamilyInfolist::configure($schema);
    }

    public static function getRelations(): array
    {
        return [
            FamilyMembersRelationManager::class,
            CharityCasesRelationManager::class,
            AssistanceSchedulesRelationManager::class,
            VisitsRelationManager::class,
            DocumentsRelationManager::class,
            DonationTargetsRelationManager::class,
        ];
    }

    public static function getModelLabel(): string
    {
        return __('Family');
    }

    public static function getPluralModelLabel(): string
    {
        return __('Families');
    }

    public static function getNavigationIcon(): string|BackedEnum|null
    {
        return Heroicon::OutlinedHome;
    }

    public static function getNavigationGroup(): string|\UnitEnum|null
    {
        return __('Families');
    }

    public static function getPages(): array
    {
        return [
            'index' => ListFamilies::route('/'),
            'create' => CreateFamily::route('/create'),
            'view' => ViewFamily::route('/{record}'),
            'edit' => EditFamily::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
