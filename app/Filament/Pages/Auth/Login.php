<?php

namespace App\Filament\Pages\Auth;

use Filament\Auth\Pages\Login as BaseLogin;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\HtmlString;

class Login extends BaseLogin
{
    public function mount(): void
    {
        parent::mount();

        if (config('app.demo_mode')) {
            $this->form->fill([
                'email' => 'admin@test.com',
                'password' => '123456789',
            ]);
        }
    }

    public function getSubheading(): string|Htmlable|null
    {
        if (! config('app.demo_mode')) {
            return parent::getSubheading();
        }

        return new HtmlString(
            '<div class="rounded-lg border border-amber-200 bg-amber-50 px-4 py-3 text-center text-sm text-amber-700 dark:border-amber-800 dark:bg-amber-950 dark:text-amber-400">'
            .'<span class="font-semibold">'.__('Demo Mode').'</span> — '
            .__('This is a demo site. All data resets every 6 hours.')
            .'</div>'
        );
    }
}
