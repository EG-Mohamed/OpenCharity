<?php

namespace App\Filament\Resources\DonationTargets;

use App\Filament\Resources\DonationTargets\Pages\CreateDonationTarget;
use App\Filament\Resources\DonationTargets\Pages\EditDonationTarget;
use App\Filament\Resources\DonationTargets\Pages\ListDonationTargets;
use App\Filament\Resources\DonationTargets\RelationManagers\DonationsRelationManager;
use App\Filament\Resources\DonationTargets\Schemas\DonationTargetForm;
use App\Filament\Resources\DonationTargets\Tables\DonationTargetsTable;
use App\Models\DonationTarget;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DonationTargetResource extends Resource
{
    protected static ?string $model = DonationTarget::class;

    protected static ?string $recordTitleAttribute = 'title';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCreditCard;

    protected static string|\UnitEnum|null $navigationGroup = 'Donations';

    protected static ?int $navigationSort = 1;

    public static function form(Schema $schema): Schema
    {
        return DonationTargetForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DonationTargetsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            DonationsRelationManager::class,
        ];
    }

    public static function getModelLabel(): string
    {
        return __('Donation Target');
    }

    public static function getPluralModelLabel(): string
    {
        return __('Donation Targets');
    }

    public static function getNavigationGroup(): ?string
    {
        return __('Donations');
    }

    public static function getPages(): array
    {
        return [
            'index' => ListDonationTargets::route('/'),
            'create' => CreateDonationTarget::route('/create'),
            'edit' => EditDonationTarget::route('/{record}/edit'),
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
