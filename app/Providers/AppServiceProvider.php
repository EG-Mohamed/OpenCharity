<?php

namespace App\Providers;

use App\Models\CharityCase;
use App\Models\Visit;
use App\Observers\CharityCaseObserver;
use App\Observers\VisitObserver;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::automaticallyEagerLoadRelationships();
        Model::unguard();
    }
}
