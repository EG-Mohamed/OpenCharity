<?php

namespace App\Filament\Resources\CharityCases\Schemas;

use Filament\Forms\Components\Select;

class CharityCaseSelect
{
    public static function make(): Select
    {
        return Select::make('charity_case_id')
            ->label(__('Charity Case'))
            ->relationship('charityCase', 'code', fn($query) => $query->join('family_members', 'family_members.id', '=', 'charity_cases.family_member_id')
                ->select('charity_cases.*', 'family_members.name as family_member_name')
            )
            ->searchable(['charity_cases.code', 'family_members.name'])
//            ->getOptionLabelFromRecordUsing(fn($record) => "
//    <div class='flex flex-col gap-0.5 py-0.5'>
//        <div class='flex items-center justify-between'>
//            <span class='px-1.5 py-px rounded text-xs font-bold bg-blue-500/10 text-blue-600 dark:bg-blue-400/15 dark:text-blue-400'>
//                {$record->code}
//            </span>
//        </div>
//        <span class='text-sm font-medium text-gray-900 dark:text-gray-100'>
//            {$record->familyMember->name}
//        </span>
//    </div>
//")
//            ->allowHtml()
            ->preload();
    }
}