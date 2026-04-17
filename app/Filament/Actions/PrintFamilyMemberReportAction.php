<?php

namespace App\Filament\Actions;

use App\Models\FamilyMember;
use Filament\Actions\Action;
use Filament\Support\Icons\Heroicon;

class PrintFamilyMemberReportAction
{
    public static function make(): Action
    {
        return Action::make('printFamilyMemberReport')
            ->label(__('Print Report'))
            ->icon(Heroicon::OutlinedPrinter)
            ->color('info')
            ->url(fn (FamilyMember $record): string => route('reports.family-members.download', $record))
            ->openUrlInNewTab();
    }
}
