<?php

namespace App\Listeners;

use App\Events\SendLoginEamilToAdminProcess;
use App\Mail\SendAdminMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Expr\Cast\Object_;

class SendLoginEmailToAdmin
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    
    public function handle(SendLoginEamilToAdminProcess $event): void
    {
      
        Mail::to($event->data['email'])->send(new SendAdminMail($event));
    }
}
