<?php

namespace App\Filament\Resources\Documents\Tables;

use App\Enums\DocumentCategory;
use App\Enums\DocumentType;
use App\Enums\DocumentVisibility;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;

class DocumentsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('family.name')
                    ->label(__('Family'))
                    ->searchable(),
                TextColumn::make('charityCase.title')
                    ->label(__('Charity Case'))
                    ->searchable(),
                TextColumn::make('type')
                    ->label(__('Type'))
                    ->badge()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('category')
                    ->label(__('Category'))
                    ->badge()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('title')
                    ->label(__('Title'))
                    ->searchable(),
                TextColumn::make('file_size')
                    ->label(__('File Size'))
                    ->formatStateUsing(fn (?int $state): string => number_format(($state ?? 0) / 1024, 1).' KB')
                    ->sortable(),
                TextColumn::make('visibility')
                    ->label(__('Visibility'))
                    ->badge()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('issued_at')
                    ->label(__('Issued At'))
                    ->date()
                    ->sortable(),
                TextColumn::make('expires_at')
                    ->label(__('Expires At'))
                    ->date()
                    ->sortable(),
                IconColumn::make('is_required')
                    ->label(__('Is Required'))
                    ->boolean(),
                IconColumn::make('is_verified')
                    ->label(__('Is Verified'))
                    ->boolean(),
                TextColumn::make('created_at')
                    ->label(__('Created At'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->label(__('Updated At'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('deleted_at')
                    ->label(__('Deleted At'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('type')
                    ->label(__('Type'))
                    ->options(DocumentType::class)
                    ->searchable(),
                SelectFilter::make('category')
                    ->label(__('Category'))
                    ->options(DocumentCategory::class)
                    ->searchable(),
                SelectFilter::make('visibility')
                    ->label(__('Visibility'))
                    ->options(DocumentVisibility::class)
                    ->searchable(),
                TrashedFilter::make(),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ]);
    }
}
