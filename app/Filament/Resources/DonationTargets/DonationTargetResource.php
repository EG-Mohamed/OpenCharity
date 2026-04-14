<?php

namespace App\Filament\Resources\DonationTargets;

use App\Filament\Resources\DonationTargets\Pages\CreateDonationTarget;
use App\Filament\Resources\DonationTargets\Pages\EditDonationTarget;
use App\Filament\Resources\DonationTargets\Pages\ListDonationTargets;
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

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

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
            //
        ];
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
