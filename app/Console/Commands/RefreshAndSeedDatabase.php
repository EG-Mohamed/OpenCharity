<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('db:refresh-and-seed')]
#[Description('Migrate fresh and seed the database every 6 hours')]
class RefreshAndSeedDatabase extends Command
{
    public function handle(): int
    {
        if (! config('app.demo_mode')) {
            $this->error('Demo mode is disabled.');

            return self::FAILURE;
        }

        $this->call('migrate:fresh', ['--seed' => true, '--force' => true]);

        return self::SUCCESS;
    }
}
