<?php

namespace App\Filament\Actions;

use App\Models\Family;
use Filament\Actions\Action;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Support\Icons\Heroicon;

class PrintFamilyReportAction
{
    public static function make(): Action
    {
        return Action::make('printFamilyReport')
            ->label(__('Print Report'))
            ->icon(Heroicon::OutlinedPrinter)
            ->color('info')
            ->schema([
                Grid::make(3)->schema([
                    Toggle::make('include_members')
                        ->label(__('Family Members'))
                        ->default(true),
                    Toggle::make('include_charity_cases')
                        ->label(__('Charity Cases'))
                        ->default(true),
                    Toggle::make('include_visits')
                        ->label(__('Visits'))
                        ->default(true),
                    Toggle::make('include_assistance_schedules')
                        ->label(__('Assistance Schedules'))
                        ->default(true),
                    Toggle::make('include_documents')
                        ->label(__('Documents'))
                        ->default(true),
                    Toggle::make('include_donations')
                        ->label(__('Donations'))
                        ->default(true),
                ])
            ])
            ->action(function (Action $action, array $data, Family $record): void {
                $url = route('reports.families.download', array_merge(['family' => $record->getKey()], $data));
                $action->redirect($url);
            });
    }
}
