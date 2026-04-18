<?php

use App\Providers\AppServiceProvider;
use App\Providers\Filament\AdminPanelProvider;
use App\Providers\FilamentServiceProvider;
use App\Providers\SeoServiceProvider;

return [
    AppServiceProvider::class,
    SeoServiceProvider::class,
    AdminPanelProvider::class,
    FilamentServiceProvider::class,
];
