<?php

namespace App\Providers\Filament;

use App\Filament\Pages\SystemSettings;
use BezhanSalleh\FilamentShield\FilamentShieldPlugin;
use Devonab\FilamentEasyFooter\EasyFooterPlugin;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\NavigationGroup;
use Filament\Panel;
use Filament\PanelProvider;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\PreventRequestForgery;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\HtmlString;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Outerweb\FilamentSettings\SettingsPlugin;
use Saade\FilamentFullCalendar\FilamentFullCalendarPlugin;
use Statikbe\FilamentTranslationManager\FilamentChainedTranslationManagerPlugin;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->homeUrl('/')
            ->default()
            ->id('admin')
            ->path('admin')
            ->viteTheme('resources/css/filament/admin/theme.css')
            ->login()
            ->profile()
            ->topbar(false)
            ->sidebarCollapsibleOnDesktop()
            ->navigationGroups([
                NavigationGroup::make('Assistance')->label(__('Assistance')),
                NavigationGroup::make('Families')->label(__('Families')),
                NavigationGroup::make('Cases')->label(__('Cases')),
                NavigationGroup::make('Donations')->label(__('Donations')),
                NavigationGroup::make('Documents')->label(__('Documents')),
                NavigationGroup::make('Settings')->label(__('Settings')),
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\Filament\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\Filament\Pages')
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')
            ->plugins([
                FilamentChainedTranslationManagerPlugin::make(),
                FilamentShieldPlugin::make()
                    ->gridColumns([
                        'default' => 1,
                        'sm' => 2,
                        'lg' => 3,
                    ])
                    ->sectionColumnSpan(1)
                    ->checkboxListColumns([
                        'default' => 1,
                        'sm' => 2,
                        'lg' => 3,
                    ])
                    ->resourceCheckboxListColumns([
                        'default' => 1,
                        'sm' => 2,
                    ]),
                EasyFooterPlugin::make()->withBorder()->withSentence(new HtmlString(base64_decode('PHNwYW4gZGlyPSJsdHIiPk1hZGUgV2l0aCA8c3BhbiBjbGFzcz0idGV4dC1yZWQtNTAwIj7inaQ8L3NwYW4+IEJ5IDxhIGhyZWY9Imh0dHBzOi8vbXNhaWVkLmNvbSIgdGFyZ2V0PSJfYmxhbmsiPk1vaGFtZWQgU2FpZDwvYT48L3NwYW4+'))),
                FilamentFullCalendarPlugin::make()
                    ->selectable(),
                SettingsPlugin::make()
                    ->pages([
                        SystemSettings::class,
                    ]),
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                PreventRequestForgery::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
