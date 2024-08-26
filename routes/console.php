<?php

use App\Console\Commands\TestCommand;
use App\Events\SendLoginEamilToAdminProcess;
use App\Jobs\CategoryJob;
use App\Models\Category;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();


Artisan::command('test',function(){
   CategoryJob::dispatch();

});


// Schedule::command('my:test')->everyMinute();
