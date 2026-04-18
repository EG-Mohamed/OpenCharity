<?php

namespace App\Filament\Resources\Families\RelationManagers;

use App\Filament\Actions\PrintFamilyMemberReportAction;
use App\Filament\Resources\FamilyMembers\Schemas\FamilyMemberForm;
use App\Filament\Resources\FamilyMembers\Tables\FamilyMembersTable;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Support\Enums\Width;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

class FamilyMembersRelationManager extends RelationManager
{
    protected static string $relationship = 'familyMembers';

    protected static ?string $title = 'Family Members';

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
        return FamilyMemberForm::configure($schema);
    }

    public function table(Table $table): Table
    {
        return FamilyMembersTable::configure($table)
            ->modelLabel(__('Family Member'))
            ->recordActions([
                ViewAction::make()->slideOver(),
                EditAction::make()
                    ->slideOver(),
                PrintFamilyMemberReportAction::make()->button(),
                DeleteAction::make(),
            ])
            ->headerActions([
                CreateAction::make()
                    ->modalWidth(Width::ScreenExtraLarge)
                    ->slideOver()
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
