<?php

namespace App\Filament\Resources\Users\Schemas;

use App\Models\CaseType;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;
use Illuminate\Validation\Rules\Password;
use Spatie\Permission\Models\Role;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make(__('User Information'))
                    ->columns(2)
                    ->schema([
                        TextInput::make('name')
                            ->label(__('Name'))
                            ->required()
                            ->maxLength(255),
                        TextInput::make('email')
                            ->label(__('Email'))
                            ->email()
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true),
                        TextInput::make('password')
                            ->label(__('Password'))
                            ->password()
                            ->revealable()
                            ->rule(Password::default())
                            ->dehydrated(fn ($state): bool => filled($state))
                            ->required(fn (string $operation): bool => $operation === 'create'),
                    ]),
                Section::make(__('Roles'))
                    ->schema([
                        Select::make('roles')
                            ->label(__('Roles'))
                            ->required()
                            ->relationship('roles', 'name')
                            ->multiple()
                            ->preload()
                            ->searchable()
                            ->live(),
                        Select::make('caseTypes')
                            ->label(__('Allowed Case Types'))
                            ->relationship('caseTypes', 'name')
                            ->options(fn (): array => CaseType::withoutGlobalScopes()->pluck('name', 'id')->all())
                            ->multiple()
                            ->preload()
                            ->searchable()
                            ->visible(fn (Get $get): bool => ! collect($get('roles'))->contains(
                                fn ($role) => Role::find($role)?->name === config('filament-shield.super_admin.name', 'super_admin')
                            )),
                    ]),
            ]);
    }
}
