<?php

namespace App\Filament\Actions;

use App\Models\FamilyMember;
use Filament\Actions\Action;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Support\Icons\Heroicon;

class PrintFamilyMemberReportAction
{
    public static function make(): Action
    {
        return Action::make('printFamilyMemberReport')
            ->label(__('Print Report'))
            ->icon(Heroicon::OutlinedPrinter)
            ->color('info')
            ->schema([
                Grid::make(3)
                    ->schema([
                        Toggle::make('include_family_details')
                            ->label(__('Family Details'))
                            ->default(true),
                        Toggle::make('include_other_members')
                            ->label(__('Other Members'))
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
                    ]),
            ])
            ->action(function (Action $action, array $data, FamilyMember $record): void {
                $url = route('reports.family-members.download', array_merge(['familyMember' => $record->getKey()], $data));
                $action->redirect($url);
            });
    }
}
