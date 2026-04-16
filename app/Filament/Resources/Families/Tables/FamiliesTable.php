<?php

namespace App\Filament\Resources\Families\Tables;

use App\Enums\FamilyStatus;
use App\Enums\HousingStatus;
use App\Filament\Exports\FamilyExporter;
use App\Models\City;
use App\Models\Neighborhood;
use App\Models\State;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ExportAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Malzariey\FilamentDaterangepickerFilter\Filters\DateRangeFilter as DaterangepickerFilter;

class FamiliesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(fn ($query) => $query->withCount('familyMembers'))
            ->columns([
                TextColumn::make('code')
                    ->label(__('Code'))
                    ->badge()->copyable()
                    ->searchable(),
                TextColumn::make('primary_contact_name')
                    ->label(__('Primary Contact Name'))
                    ->searchable(),
                TextColumn::make('primary_contact_phone')
                    ->label(__('Primary Contact Phone'))
                    ->badge()->copyable()
                    ->searchable(),
                TextColumn::make('secondary_contact_phone')
                    ->label(__('Secondary Contact Phone'))
                    ->badge()->copyable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('state.name')
                    ->badge()
                    ->label(__('State')),
                TextColumn::make('city.name')
                    ->badge()
                    ->label(__('City'))
                    ->searchable(),
                TextColumn::make('neighborhood.name')
                    ->label(__('Neighborhood'))
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('housing_status')
                    ->label(__('Housing Status'))
                    ->badge()
                    ->searchable()
                    ->sortable(),
                TextColumn::make('family_members_sum_monthly_income')
                    ->sum('familyMembers', 'monthly_income')
                    ->label(__('Monthly Income'))
                    ->currency()
                    ->sortable(),
                TextColumn::make('family_members_count')
                    ->label(__('Members Count'))
                    ->numeric()
                    ->sortable(),
                TextColumn::make('status')
                    ->label(__('Status'))
                    ->badge()
                    ->searchable()
                    ->sortable(),
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
                SelectFilter::make('state_id')
                    ->label(__('State'))
                    ->options(fn (): array => State::query()->pluck('name', 'id')->all())
                    ->searchable(),
                SelectFilter::make('city_id')
                    ->label(__('City'))
                    ->options(fn (): array => City::query()->pluck('name', 'id')->all())
                    ->searchable(),
                SelectFilter::make('neighborhood_id')
                    ->label(__('Neighborhood'))
                    ->options(fn (): array => Neighborhood::query()->pluck('name', 'id')->all())
                    ->searchable(),
                SelectFilter::make('status')
                    ->label(__('Status'))
                    ->options(FamilyStatus::class)
                    ->searchable(),
                SelectFilter::make('housing_status')
                    ->label(__('Housing Status'))
                    ->options(HousingStatus::class)
                    ->searchable(),
                DaterangepickerFilter::make('created_at')
                    ->label(__('Created At'))
                    ->useColumn('created_at'),
                Filter::make('members_count')
                    ->label(__('Members Count'))
                    ->schema([
                        TextInput::make('min')->label(__('Min Members'))->numeric(),
                        TextInput::make('max')->label(__('Max Members'))->numeric(),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when($data['min'] ?? null, fn (Builder $query, $count): Builder => $query->has('familyMembers', '>=', (int) $count))
                            ->when($data['max'] ?? null, fn (Builder $query, $count): Builder => $query->has('familyMembers', '<=', (int) $count));
                    }),
                Filter::make('income_range')
                    ->label(__('Monthly Income'))
                    ->schema([
                        TextInput::make('min')->label(__('Min Income'))->numeric(),
                        TextInput::make('max')->label(__('Max Income'))->numeric(),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when($data['min'] ?? null, function (Builder $query, $amount): Builder {
                                return $query->withSum('familyMembers', 'monthly_income')
                                    ->having('family_members_sum_monthly_income', '>=', $amount);
                            })
                            ->when($data['max'] ?? null, function (Builder $query, $amount): Builder {
                                return $query->withSum('familyMembers', 'monthly_income')
                                    ->having('family_members_sum_monthly_income', '<=', $amount);
                            });
                    }),
                TrashedFilter::make(),
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->headerActions([
                ExportAction::make()
                    ->label(__('Export'))
                    ->exporter(FamilyExporter::class),
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
