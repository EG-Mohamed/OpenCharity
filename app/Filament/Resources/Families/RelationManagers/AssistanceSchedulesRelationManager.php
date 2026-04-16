<?php

namespace App\Filament\Resources\Families\RelationManagers;

use App\Filament\Resources\AssistanceSchedules\Schemas\AssistanceScheduleForm;
use App\Filament\Resources\AssistanceSchedules\Tables\AssistanceSchedulesTable;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Support\Enums\Width;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

class AssistanceSchedulesRelationManager extends RelationManager
{
    protected static string $relationship = 'assistanceSchedules';

    protected static ?string $title = 'Assistance Schedules';

    public static function getTitle(Model $ownerRecord, string $pageClass): string
    {
        return __(self::$title);
    }

    public static function getPluralModelLabel(): ?string
    {
        return __(self::$title);
    }

    public function form(Schema $schema): Schema
    {
        return AssistanceScheduleForm::configure($schema);
    }

    public function table(Table $table): Table
    {
        return AssistanceSchedulesTable::configure($table)
            ->modelLabel(__('Assistance Schedule'))
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->headerActions([
                CreateAction::make()
                    ->slideOver()
                    ->modalWidth(Width::ScreenExtraLarge)
                    ->fillForm(fn (array $data): array => $data),
            ]);
    }

    public function isReadOnly(): bool
    {
        return false;
    }
}
