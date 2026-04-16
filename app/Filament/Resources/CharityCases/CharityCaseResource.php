<?php

namespace App\Filament\Resources\CharityCases;

use App\Filament\Resources\CharityCases\Pages\CreateCharityCase;
use App\Filament\Resources\CharityCases\Pages\EditCharityCase;
use App\Filament\Resources\CharityCases\Pages\ListCharityCases;
use App\Filament\Resources\CharityCases\Pages\ViewCharityCase;
use App\Filament\Resources\CharityCases\RelationManagers\AssistanceSchedulesRelationManager;
use App\Filament\Resources\CharityCases\RelationManagers\DocumentsRelationManager;
use App\Filament\Resources\CharityCases\RelationManagers\DonationTargetsRelationManager;
use App\Filament\Resources\CharityCases\RelationManagers\VisitsRelationManager;
use App\Filament\Resources\CharityCases\Schemas\CharityCaseForm;
use App\Filament\Resources\CharityCases\Schemas\CharityCaseInfolist;
use App\Filament\Resources\CharityCases\Tables\CharityCasesTable;
use App\Models\CharityCase;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CharityCaseResource extends Resource
{
    protected static ?string $model = CharityCase::class;

    protected static ?string $recordTitleAttribute = 'code';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBriefcase;

    protected static string|\UnitEnum|null $navigationGroup = 'Cases';

    public static function form(Schema $schema): Schema
    {
        return CharityCaseForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return CharityCaseInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CharityCasesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            VisitsRelationManager::class,
            DocumentsRelationManager::class,
            AssistanceSchedulesRelationManager::class,
            DonationTargetsRelationManager::class,
        ];
    }

    public static function getModelLabel(): string
    {
        return __('Charity Case');
    }

    public static function getPluralModelLabel(): string
    {
        return __('Charity Cases');
    }

    public static function getNavigationGroup(): ?string
    {
        return __('Cases');
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCharityCases::route('/'),
            'create' => CreateCharityCase::route('/create'),
            'view' => ViewCharityCase::route('/{record}'),
            'edit' => EditCharityCase::route('/{record}/edit'),
        ];
    }

    public static function getGlobalSearchResultUrl(Model $record): string
    {
        return static::getUrl('view', ['record' => $record]);
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
