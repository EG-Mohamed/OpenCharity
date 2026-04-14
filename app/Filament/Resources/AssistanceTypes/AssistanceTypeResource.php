<?php

namespace App\Filament\Resources\AssistanceTypes;

use App\Filament\Resources\AssistanceTypes\Pages\CreateAssistanceType;
use App\Filament\Resources\AssistanceTypes\Pages\EditAssistanceType;
use App\Filament\Resources\AssistanceTypes\Pages\ListAssistanceTypes;
use App\Filament\Resources\AssistanceTypes\Schemas\AssistanceTypeForm;
use App\Filament\Resources\AssistanceTypes\Tables\AssistanceTypesTable;
use App\Models\AssistanceType;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AssistanceTypeResource extends Resource
{
    protected static ?string $model = AssistanceType::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return AssistanceTypeForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AssistanceTypesTable::configure($table);
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
            'index' => ListAssistanceTypes::route('/'),
            'create' => CreateAssistanceType::route('/create'),
            'edit' => EditAssistanceType::route('/{record}/edit'),
        ];
    }
}
