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
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Ysfkaya\FilamentPhoneInput\Forms\PhoneInput;

class FamilyMemberForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make(__('Identity'))
                    ->columns(2)
                    ->schema([
                        Select::make('family_id')
                            ->label(__('Family'))
                            ->relationship('family', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),
                        TextInput::make('name')
                            ->label(__('Name'))
                            ->required(),
                        TextInput::make('national_id')
                            ->label(__('National ID')),
                        Select::make('gender')
                            ->label(__('Gender'))
                            ->options(Gender::class)
                            ->required(),
                        Select::make('relation_to_head')
                            ->label(__('Relation To Head'))
                            ->options(RelationToHead::class)
                            ->required(),
                        DatePicker::make('birth_date')
                            ->label(__('Birth Date')),
                        Select::make('marital_status')
                            ->label(__('Marital Status'))
                            ->options(MaritalStatus::class)
                            ->required(),
                    ]),
                Section::make(__('Status'))
                    ->columns(2)
                    ->schema([
                        Select::make('education_status')
                            ->label(__('Education Status'))
                            ->options(EducationStatus::class)
                            ->required(),
                        Select::make('employment_status')
                            ->label(__('Employment Status'))
                            ->options(EmploymentStatus::class)
                            ->required(),
                        Select::make('health_status')
                            ->label(__('Health Status'))
                            ->options(HealthStatus::class)
                            ->required(),
                        TextInput::make('monthly_income')
                            ->label(__('Monthly Income'))
                            ->required()
                            ->numeric()
                            ->prefix('EGP')
                            ->default(0.0),
                    ]),
                Section::make(__('Contact'))
                    ->columns(2)
                    ->schema([
                        PhoneInput::make('phone')
                            ->label(__('Phone')),
                    ]),
                Section::make(__('Notes'))
                    ->schema([
                        Textarea::make('notes')
                            ->label(__('Notes'))
                            ->columnSpanFull(),
                    ])
                    ->columnSpanFull(),
            ]);
    }
}
