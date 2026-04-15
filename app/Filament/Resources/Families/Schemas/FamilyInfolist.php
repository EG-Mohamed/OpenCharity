<?php

namespace App\Filament\Resources\Families\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\HtmlString;
use Ysfkaya\FilamentPhoneInput\Infolists\PhoneEntry;

class FamilyInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make(__('Family Information'))
                    ->columns(3)
                    ->collapsible()
                    ->schema([
                        TextEntry::make('code')
                            ->label(__('Code'))
                            ->badge()
                            ->copyable(),
                        TextEntry::make('status')
                            ->label(__('Status'))
                            ->badge(),
                        TextEntry::make('primary_contact_name')
                            ->label(__('Primary Contact Name'))
                            ->copyable(),
                        PhoneEntry::make('primary_contact_phone')
                            ->badge()
                            ->label(__('Primary Contact Phone'))
                            ->copyable(),
                        PhoneEntry::make('secondary_contact_phone')
                            ->badge()
                            ->label(__('Secondary Contact Phone'))
                            ->copyable(),
                    ]),
                Section::make(__('Address Fields'))
                    ->columns(3)
                    ->collapsible()
                    ->schema([
                        TextEntry::make('state.name')
                            ->label(__('State'))
                            ->badge()
                            ->copyable(),
                        TextEntry::make('city.name')
                            ->label(__('City')),
                        TextEntry::make('neighborhood.name')
                            ->label(__('Neighborhood'))
                            ->badge(),
                        TextEntry::make('address')
                            ->label(__('Address'))
                            ->copyable()
                            ->hint(function ($record): ?HtmlString {
                                if (blank($record->latitude) || blank($record->longitude)) {
                                    return null;
                                }

                                $url = sprintf('https://www.google.com/maps?q=%s,%s', $record->latitude, $record->longitude);

                                return new HtmlString(sprintf('<a href="%s" target="_blank" rel="noopener noreferrer">%s</a>', e($url), e(__('Open In Map'))));
                            })
                            ->columnSpanFull(),
                    ]),
                Section::make(__('Household'))
                    ->columns(3)
                    ->collapsible()
                    ->schema([
                        TextEntry::make('housing_status')
                            ->label(__('Housing Status'))
                            ->badge(),
                        TextEntry::make('family_members_sum_monthly_income')
                            ->sum('familyMembers', 'monthly_income')
                            ->label(__('Monthly Income'))
                            ->currency(),
                        TextEntry::make('family_members_count')
                            ->label(__('Members Count'))
                            ->badge()
                            ->state(fn ($record): int => $record->familyMembers()->count()),
                    ]),
                Section::make(__('Notes'))
                    ->collapsible()
                    ->schema([
                        TextEntry::make('notes')
                            ->label(__('Notes'))
                            ->placeholder('-')
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
