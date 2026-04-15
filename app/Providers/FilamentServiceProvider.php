<?php

namespace App\Providers;

use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\Field;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Infolists\Components\Entry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Panel;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Colors\Color;
use Filament\Support\Enums\Size;
use Filament\Support\Enums\Width;
use Filament\Tables\Columns\Column;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\Summarizers\Sum;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\BaseFilter;
use Filament\Tables\Table;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class FilamentServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        Panel::configureUsing(fn (Panel $panel) => $panel->maxContentWidth(Width::Full)
            ->font('Alexandria')
            ->colors([
                'primary' => Color::Emerald,
            ])
            ->readOnlyRelationManagersOnResourceViewPagesByDefault(false));
    }

    public function boot(): void
    {
        TimePicker::configureUsing(fn (TimePicker $picker) => $picker->seconds(false));
        Table::configureUsing(fn (Table $table) => $table->defaultDateTimeDisplayFormat('j M Y - g:i A')
            ->defaultDateDisplayFormat('j M Y')
            ->defaultTimeDisplayFormat('g:i A'));
        ToggleColumn::configureUsing(function (ToggleColumn $toggle): void {
            $toggle->offColor('danger')
                ->onColor('success')
                ->onIcon('fas-check-circle')
                ->offIcon('fas-times-circle');
        });
        Schema::configureUsing(fn (Schema $schema) => $schema->defaultDateTimeDisplayFormat('j M Y - g:i A')
            ->defaultDateDisplayFormat('j M Y')
            ->defaultTimeDisplayFormat('g:i A'));
        ViewAction::configureUsing(fn (ViewAction $action) => $action->button()
            ->size(Size::ExtraSmall));
        EditAction::configureUsing(fn (EditAction $action) => $action->button()
            ->size(Size::ExtraSmall));
        DeleteAction::configureUsing(fn (DeleteAction $action) => $action->button()
            ->size(Size::ExtraSmall));
        Column::configureUsing(fn (Column $column) => $column->translateLabel());
        Field::configureUsing(fn (Field $field) => $field->translateLabel());
        Entry::configureUsing(fn (Entry $entry) => $entry->translateLabel());
        BaseFilter::configureUsing(fn (BaseFilter $baseFilter) => $baseFilter->translateLabel());
        Action::configureUsing(fn (Action $action) => $action->size(Size::ExtraSmall));
        Section::configureUsing(fn (Section $section) => $section->columnSpanFull()->compact(true));
        ImageColumn::configureUsing(fn (ImageColumn $imageColumn) => $imageColumn->checkFileExistence(false)
            ->visibility('public')
            ->extraImgAttributes(['loading' => 'lazy']));
        ImageEntry::configureUsing(fn (ImageEntry $imageEntry) => $imageEntry->checkFileExistence(false)
            ->visibility('public')
            ->extraImgAttributes(['loading' => 'lazy']));
        FileUpload::configureUsing(fn (FileUpload $fileUpload) => $fileUpload->visibility('public')
            ->fetchFileInformation(false));

        TextColumn::macro('currency', function (): static {
            $this->formatStateUsing(static function (TextColumn $column, $state): ?string {
                if (blank($state) or empty($state) or ! is_numeric($state)) {
                    return $state;
                }

                return money($state)->format();
            })
                ->alignCenter()
                ->badge()
                ->color(function (string $state) {
                    if (blank($state) or empty($state) or ! is_numeric($state)) {
                        return 'warning';
                    }

                    return match ($state >= 0) {
                        true => 'success',
                        false => 'danger',
                    };
                });

            return $this;
        });

        TextEntry::macro('currency', function (): static {
            $this->formatStateUsing(static function ($state): ?string {
                if (blank($state)) {
                    return null;
                }

                return money($state)->format();
            })
                ->badge()
                ->color(fn (string $state): string => match ($state >= 0) {
                    true => 'success',
                    false => 'danger',
                });

            return $this;
        });
        Sum::macro('currency', function (): static {
            $this->formatStateUsing(static function (Sum $sum, $state): ?string {
                if (blank($state)) {
                    return null;
                }

                return money($state)->format();
            });

            return $this;
        });
        TextInput::macro('currency', function (): static {
            $currency = config('app.currency');
            $this->extraAttributes(['wire:key' => Str::random()])
                ->prefix(static function (TextInput $component) use ($currency) {
                    $currency = $component->evaluate($currency);

                    return currency($currency)->getPrefix();
                })
                ->suffix(static function (TextInput $component) use ($currency) {
                    $currency = $component->evaluate($currency);

                    return currency($currency)->getSuffix();
                });

            return $this;
        });
    }
}
