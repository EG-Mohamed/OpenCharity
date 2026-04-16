<?php

namespace App\Filament\Resources\AssistanceSchedules\RelationManagers;

use App\Filament\Resources\AssistanceDeliveries\Schemas\AssistanceDeliveryForm;
use App\Filament\Resources\AssistanceDeliveries\Tables\AssistanceDeliveriesTable;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Support\Enums\Width;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

class AssistanceDeliveriesRelationManager extends RelationManager
{
    protected static string $relationship = 'assistanceDeliveries';

    protected static ?string $title = 'Assistance Deliveries';

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
        return AssistanceDeliveryForm::configure($schema);
    }

    public function table(Table $table): Table
    {
        return AssistanceDeliveriesTable::configure($table)
            ->modelLabel(__('Assistance Delivery'))
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->headerActions([
                CreateAction::make()
                    ->label(__('Create Delivery'))
                    ->icon('heroicon-o-truck')
                    ->slideOver()
                    ->modalWidth(Width::ScreenExtraLarge)
                    ->mutateDataUsing(fn (array $data): array => [
                        ...$data,
                        'assistance_schedule_id' => $this->getOwnerRecord()->getKey(),
                    ]),
            ]);
    }

    public function isReadOnly(): bool
    {
        return false;
    }
}
