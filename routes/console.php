<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Schedule::command('db:refresh-and-seed')
    ->everySixHours()
    ->withoutOverlapping()
    ->onOneServer()
    ->runInBackground();
