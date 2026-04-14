<?php

namespace App\Filament\Resources\DonationAllocations;

use App\Filament\Resources\DonationAllocations\Pages\CreateDonationAllocation;
use App\Filament\Resources\DonationAllocations\Pages\EditDonationAllocation;
use App\Filament\Resources\DonationAllocations\Pages\ListDonationAllocations;
use App\Filament\Resources\DonationAllocations\Schemas\DonationAllocationForm;
use App\Filament\Resources\DonationAllocations\Tables\DonationAllocationsTable;
use App\Models\DonationAllocation;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DonationAllocationResource extends Resource
{
    protected static ?string $model = DonationAllocation::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return DonationAllocationForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DonationAllocationsTable::configure($table);
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
            'index' => ListDonationAllocations::route('/'),
            'create' => CreateDonationAllocation::route('/create'),
            'edit' => EditDonationAllocation::route('/{record}/edit'),
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
