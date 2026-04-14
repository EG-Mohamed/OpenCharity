<?php

namespace App\Filament\Resources\AssistanceSchedules;

use App\Filament\Resources\AssistanceSchedules\Pages\CreateAssistanceSchedule;
use App\Filament\Resources\AssistanceSchedules\Pages\EditAssistanceSchedule;
use App\Filament\Resources\AssistanceSchedules\Pages\ListAssistanceSchedules;
use App\Filament\Resources\AssistanceSchedules\Schemas\AssistanceScheduleForm;
use App\Filament\Resources\AssistanceSchedules\Tables\AssistanceSchedulesTable;
use App\Models\AssistanceSchedule;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AssistanceScheduleResource extends Resource
{
    protected static ?string $model = AssistanceSchedule::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return AssistanceScheduleForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AssistanceSchedulesTable::configure($table);
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
            'index' => ListAssistanceSchedules::route('/'),
            'create' => CreateAssistanceSchedule::route('/create'),
            'edit' => EditAssistanceSchedule::route('/{record}/edit'),
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
