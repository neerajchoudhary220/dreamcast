<?php

use App\Events\SendLoginEamilToAdminProcess;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();


Artisan::command('test',function(){

    $data =[
        'email' => 'admin@mail.com',
        'message' => 'test message'  // replace with actual message content  // replace with actual message content  // replace with actual message content  // replace with actual message content  // replace with actual message content  // replace with actual message content  // replace with actual message content  // replace with actual message content  // replace with actual message content  // replace with actual message content  // replace with actual message content  // replace with actual message content  // replace with actual message content  // replace with actual message content  // replace with actual message content  // replace with actual message content  // replace with actual message content  // replace with actual message content  // replace with actual message content  // replace with actual message content  // replace with actual message content  // replace with actual message content  // replace with actual message content  // replace with actual message content  // replace with actual message content  // replace with actual
    ];
   
    event( new SendLoginEamilToAdminProcess($data));

});