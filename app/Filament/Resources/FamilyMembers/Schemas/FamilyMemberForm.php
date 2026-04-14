<?php

namespace App\Filament\Resources\FamilyMembers\Schemas;

use App\Enums\EducationStatus;
use App\Enums\EmploymentStatus;
use App\Enums\Gender;
use App\Enums\HealthStatus;
use App\Enums\MaritalStatus;
use App\Enums\RelationToHead;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class FamilyMemberForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('family_id')
                    ->relationship('family', 'name')
                    ->required(),
                TextInput::make('name')
                    ->required(),
                Select::make('relation_to_head')
                    ->options(RelationToHead::class)
                    ->required(),
                Select::make('gender')
                    ->options(Gender::class)
                    ->required(),
                DatePicker::make('birth_date'),
                Select::make('marital_status')
                    ->options(MaritalStatus::class)
                    ->required(),
                Select::make('education_status')
                    ->options(EducationStatus::class)
                    ->required(),
                Select::make('employment_status')
                    ->options(EmploymentStatus::class)
                    ->required(),
                Select::make('health_status')
                    ->options(HealthStatus::class)
                    ->required(),
                TextInput::make('monthly_income')
                    ->required()
                    ->numeric()
                    ->default(0.0),
                TextInput::make('national_id'),
                TextInput::make('phone')
                    ->tel(),
                Textarea::make('notes')
                    ->columnSpanFull(),
            ]);
    }
}
