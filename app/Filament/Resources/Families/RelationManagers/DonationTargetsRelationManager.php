<?php

namespace App\Filament\Resources\Families\RelationManagers;

use App\Filament\Resources\DonationTargets\Schemas\DonationTargetForm;
use App\Filament\Resources\DonationTargets\Tables\DonationTargetsTable;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Support\Enums\Width;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

class DonationTargetsRelationManager extends RelationManager
{
    protected static string $relationship = 'donationTargets';
    protected static ?string $title = 'Donation Targets';

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
        return DonationTargetForm::configure($schema);
    }

    public function table(Table $table): Table
    {
        return DonationTargetsTable::configure($table)
            ->modelLabel(__('Donation Target'))
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->headerActions([
                CreateAction::make()
                    ->slideOver()
                    ->modalWidth(Width::ScreenExtraLarge)
                    ->fillForm(function (array $data): array {
                        $data['family_id'] = $this->getOwnerRecord()->getKey();

                        return $data;
                    }),
            ]);
    }

    public function isReadOnly(): bool
    {
        return false;
    }
}
