<?php

namespace App\Filament\Resources\AssistanceDeliveries;

use App\Filament\Resources\AssistanceDeliveries\Pages\CreateAssistanceDelivery;
use App\Filament\Resources\AssistanceDeliveries\Pages\EditAssistanceDelivery;
use App\Filament\Resources\AssistanceDeliveries\Pages\ListAssistanceDeliveries;
use App\Filament\Resources\AssistanceDeliveries\Schemas\AssistanceDeliveryForm;
use App\Filament\Resources\AssistanceDeliveries\Tables\AssistanceDeliveriesTable;
use App\Models\AssistanceDelivery;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AssistanceDeliveryResource extends Resource
{
    protected static ?string $model = AssistanceDelivery::class;

    protected static ?string $recordTitleAttribute = 'received_by_name';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedTruck;

    protected static string|\UnitEnum|null $navigationGroup = 'Assistance';

    protected static ?int $navigationSort = 3;

    public static function form(Schema $schema): Schema
    {
        return AssistanceDeliveryForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AssistanceDeliveriesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getModelLabel(): string
    {
        return __('Assistance Delivery');
    }

    public static function getPluralModelLabel(): string
    {
        return __('Assistance Deliveries');
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAssistanceDeliveries::route('/'),
            'create' => CreateAssistanceDelivery::route('/create'),
            'edit' => EditAssistanceDelivery::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }

    public static function getNavigationGroup(): ?string
    {
        return __('Assistance');
    }
}
