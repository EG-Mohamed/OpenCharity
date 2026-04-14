<?php

namespace App\Filament\Resources\CharityCases;

use App\Filament\Resources\CharityCases\Pages\CreateCharityCase;
use App\Filament\Resources\CharityCases\Pages\EditCharityCase;
use App\Filament\Resources\CharityCases\Pages\ListCharityCases;
use App\Filament\Resources\CharityCases\Schemas\CharityCaseForm;
use App\Filament\Resources\CharityCases\Tables\CharityCasesTable;
use App\Models\CharityCase;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CharityCaseResource extends Resource
{
    protected static ?string $model = CharityCase::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return CharityCaseForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CharityCasesTable::configure($table);
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
            'index' => ListCharityCases::route('/'),
            'create' => CreateCharityCase::route('/create'),
            'edit' => EditCharityCase::route('/{record}/edit'),
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
